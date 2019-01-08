<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Articulo;

use Auth;
use App\Http\Middleware\HaveCurriculumMiddleware;
use App\Http\Middleware\AccessOnlyOwnArticuloMiddleware;

use Validator;
use App\Http\Requests\StoreArticuloRequest;
use App\Http\Requests\UpdateArticuloRequest;

use Illuminate\Support\Facades\Storage;

use Carbon\Carbon;

class ArticuloController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(HaveCurriculumMiddleware::class);
        $this->middleware(AccessOnlyOwnArticuloMiddleware::class)->except(['index', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->rol == 'super usuario') $articulos = Articulo::orderBy('id', 'DESC')->paginate(5);
        else $articulos = Articulo::where('usuario_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);

        return view('administrator.articulo.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fechas = Articulo::orderBy('id', 'DESC')->get(['fecha_publicacion'])->map(function ($fecha) {
            $fecha->fecha_publicacion = new Carbon($fecha->fecha_publicacion);
            return $fecha->fecha_publicacion->format('d-m-Y');
        });

        $fechas = $fechas->toArray();

        return view('administrator.articulo.create', compact('fechas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticuloRequest $request)
    {
        $input = $request->all();

        $input['fecha_publicacion'] = new Carbon($input['fecha_publicacion']);

        $validator = Validator::make($input, [
            'fecha_publicacion' => 'unique:articulo,fecha_publicacion',
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::user()->rol != 'super usuario') $input['publicado'] = 0;

        if ($request->file('imagen'))
        {
            $path = Storage::disk('public')->put('images/site/images_articles', $request->file('imagen'));
        }

        Articulo::create(array_merge($input, ['imagen' => $path, 'usuario_id' => Auth::user()->id]));

        return redirect()->route('administrator.articulo.index')->with('info', '!Artículo Creado Exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);

        if ( ! $articulo) return view('administrator.pages.unauthorized');

        $articulo = json_decode($articulo->toJson());
        $articulo->fecha_publicacion = new Carbon($articulo->fecha_publicacion);
        $articulo->fecha_publicacion = $articulo->fecha_publicacion->format('d-m-Y');

        $fechas = Articulo::orderBy('id', 'DESC')->get(['fecha_publicacion'])->map(function ($fecha) use ($articulo) {
            $fecha->fecha_publicacion = new Carbon($fecha->fecha_publicacion);
            $fecha->fecha_publicacion = $fecha->fecha_publicacion->format('d-m-Y');
            
            if ($articulo->fecha_publicacion != $fecha->fecha_publicacion)
            {
                return $fecha->fecha_publicacion;
            }
        });

        $fechas = array_values($fechas->filter()->all());

        return view('administrator.articulo.edit', compact('articulo', 'fechas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticuloRequest $request, $id)
    {
        $articulo = Articulo::find($id);

        if ( ! $articulo) return view('administrator.pages.unauthorized');

        $input = $request->all();

        $input['fecha_publicacion'] = new Carbon($input['fecha_publicacion']);

        $validator = Validator::make($input, [
            'fecha_publicacion' => 'unique:articulo,fecha_publicacion,'.$id,
            'alias' => 'unique:articulo,alias,'.$id,
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (Auth::user()->rol != 'super usuario') $input['publicado'] = 0;

        if ($request->file('imagen'))
        {
            $path = Storage::disk('public')->put('images/site/images_articles', $request->file('imagen'));
            $input = $path;
        }

        $articulo->fill(array_merge($input, ['usuario_id' => Auth::user()->id]))->save();

        return redirect()->route('administrator.articulo.index')->with('info', '!Artículo Creado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);

        if ( ! $articulo) return view('administrator.pages.unauthorized');

        $articulo->delete();

        return redirect()->route('administrator.articulo.index')->with('info', '!Artículo Eliminado Exitosamente!');
    }
}
