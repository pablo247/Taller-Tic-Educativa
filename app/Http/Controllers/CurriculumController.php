<?php

namespace App\Http\Controllers;

use App\Curriculum;
use App\RedSocial;
use App\Usuario;
use Illuminate\Http\Request;

use Auth;
use App\Http\Middleware\FormCurriculumMiddleware;
use App\Http\Middleware\AccessOnlyOwnCurriculumMiddleware;

use App\Http\Requests\SaveCurriculumRequest;
use Validator;

use Illuminate\Support\Facades\Storage;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['template', 'contact']);
        $this->middleware(FormCurriculumMiddleware::class)->except(['edit', 'update', 'template', 'contact']);
        $this->middleware(AccessOnlyOwnCurriculumMiddleware::class)->only(['edit', 'update']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $redessociales = RedSocial::all();

        return view('administrator.cv.create', compact('redessociales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCurriculumRequest $request)
    {
        $input = array_merge(['id'=>Auth::user()->id], $request->all());

        if ($request->file('banner'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_header', $request->file('banner'));
            $input = array_merge($input, ['banner' => asset($path)]);
        }
        else
            $input = array_merge($input, ['banner' => asset('images/site/cv/images_header/image_hero_default.jpg')]);
        
        $curriculum = Curriculum::create($input);
        $curriculum = Curriculum::find(Auth::user()->id);

        $url = [];

        if ($request->icono)
        {
            foreach ($request->icono as $key => $value)
            {
                if ($value) $url[$key] = ['url' => $value];
            }
        }

        if (!empty($url))
            $curriculum->redes_sociales()->sync($url);

        return redirect()->route('administrator.curriculum.edit', Auth::user()->id)->with('info', '¡Usuario editado exitosamente!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curriculum = Curriculum::find($id);

        $urls = [];

        foreach ($curriculum->redes_sociales as $key => &$value)
        {
            $urls[$value->pivot->red_social_id] = $value->pivot->url;
        }

        $redessociales = RedSocial::all();

        if ($curriculum) return view('administrator.cv.edit', compact('curriculum', 'redessociales', 'urls'));

        return view('administrator.pages.unauthorized');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCurriculumRequest $request, $id)
    {
        $curriculum = Curriculum::find($id);

        if ( ! $curriculum ) return view('administrator.cv.create');

        $url = [];

        if ($request->icono)
        {
            foreach ($request->icono as $key => $value)
            {
                if ($value) $url[$key] = ['url' => $value];
            }
        }

        if (!empty($url))
            $curriculum->redes_sociales()->sync($url);
            
        $input = $request->all();

        unset($input['icono']);
        
        if ($request->file('banner'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_header', $request->file('banner'));
            $input = array_merge($input, ['banner' => asset($path)]);
        }
        
        $curriculum = $curriculum->fill($input)->save();

        return back()->with('info', 'Información Guardada Correctamente.');
    }

    public function template($id)
    {
        $usuario = Usuario::find($id);

        if ( ! $usuario) dd('Error 404, Página no encontrada.');

        $curriculum = Curriculum::find($id);

        $redessociales = [];
        $conocimientos = [];
        $portafolio = [];

        foreach ($curriculum->redes_sociales as $key => $value)
        {
            $redessociales[] = [
                'titulo' => $value->titulo,
                'icono' => $value->icono,
                'url' => $value->pivot->url
            ];
        }

        foreach ($curriculum->conocimientos as $key => $value)
        {
            $conocimientos[] = [
                'icono' => $value->icono,
                'titulo' => $value->titulo,
                'descripcion' => $value->descripcion
            ];
        }

        foreach ($curriculum->portafolios as $key => $value)
        {
            $portafolio[] = [
                'descripcion' => $value->descripcion,
                'imagen' => $value->imagen,
                'url' => $value->url
            ];
        }

        $data = [
            'id' => $id,
            'banner' => $curriculum->banner,
            'foto_perfil' => $usuario->foto_perfil,
            'nombre' => $usuario->nombre . ' ' . $usuario->apellido,
            'titulo' => $curriculum->titulo,
            'acerca' => $curriculum->acerca,
            'redessociales' => $redessociales,
            'conocimientos' => $conocimientos,
            'portafolio' => $portafolio
        ];
        
        return view('site.cv.index', compact('data'));
    }

    public function contact(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->route('curriculum.template', ['user_id'=>$id, 'section'=>'#contacto'])->withErrors($validator)->withInput();
        }

        $usuario = Usuario::find($id);

        if ($usuario)
        {
            Mail::to($usuario->correo)->send(new ContactMail($request->all()));
            return redirect()->route('curriculum.template', ['user_id'=>$id, 'section'=>'#contacto'])->with('info', $usuario->curriculum->mensaje_contacto);
        }
        else
        {
            return redirect()->route('curriculum.template', ['user_id'=>$id, 'section'=>'#contacto'])->with('error', 'Error al enviar el correo, intentar nuevamente.');
        }
    }
}
