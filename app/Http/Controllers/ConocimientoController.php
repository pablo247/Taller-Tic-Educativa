<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Conocimiento;

use Auth;
use App\Http\Middleware\AccessOnlyOwnConocimientoMiddleware;

use App\Http\Requests\StoreConocimientoRequest;
use App\Http\Requests\UpdateConocimientoRequest;

use Illuminate\Support\Facades\Storage;

class ConocimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(AccessOnlyOwnConocimientoMiddleware::class)->except(['index', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conocimientos = Conocimiento::where('curriculum_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);

        return view('administrator.conocimiento.index', compact('conocimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.conocimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConocimientoRequest $request)
    {
        if ($request->file('icono'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_skills', $request->file('icono'));
            $path = asset($path);
        }

        Conocimiento::create(array_merge($request->all(), ['icono' => $path, 'curriculum_id' => Auth::user()->id]));

        return redirect()->route('administrator.conocimiento.index')->with('info', '!Conocimiento Creado Exitosamente!');
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
        $conocimiento = Conocimiento::find($id);

        if ($conocimiento) return view('administrator.conocimiento.edit', compact('conocimiento'));

        return view('administrator.pages.unauthorized');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConocimientoRequest $request, $id)
    {
        $conocimiento = Conocimiento::find($id);

        if ( ! $conocimiento) return view('administrator.pages.unauthorized');

        $input = $request->all();

        if ($request->file('icono'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_skills', $request->file('icono'));
            $input['icono'] = asset($path);
        }

        $conocimiento->fill($input)->save();

        return redirect()->route('administrator.conocimiento.index')->with('info', '!Conocimiento Actualizado Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conocimiento = Conocimiento::find($id);

        if ( ! $conocimiento) return view('administrator.pages.unauthorized');

        $conocimiento->delete();

        return redirect()->route('administrator.conocimiento.index')->with('info', '!Conocimiento Eliminado Exitosamente!');
    }
}
