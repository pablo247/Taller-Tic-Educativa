<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Portafolio;

use Auth;
use App\Http\Middleware\AccessOnlyOwnPortafolioMiddleware;

use App\Http\Requests\StorePortafolioRequest;
use App\Http\Requests\UpdatePortafolioRequest;

use Illuminate\Support\Facades\Storage;

class PortafolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(AccessOnlyOwnPortafolioMiddleware::class)->except(['index', 'create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolio = Portafolio::where('curriculum_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);

        return view('administrator.portfolio.index', compact('portafolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.portfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortafolioRequest $request)
    {
        if ($request->file('imagen'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_portfolio', $request->file('imagen'));
        }

        Portafolio::create(array_merge($request->all(), ['imagen' => $path, 'curriculum_id' => Auth::user()->id]));

        return redirect()->route('administrator.portafolio.index')->with('info', '!Evidencia Creada Exitosamente!');
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
        $portafolio = Portafolio::find($id);

        if ($portafolio) return view('administrator.portfolio.edit', compact('portafolio'));

        return view('administrator.pages.unauthorized');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortafolioRequest $request, $id)
    {
        $portafolio = Portafolio::find($id);

        if ( ! $portafolio) return view('administrator.pages.unauthorized');

        $input = $request->all();

        if ($request->file('imagen'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_portfolio', $request->file('imagen'));
            $input['imagen'] = $path;
        }

        $portafolio->fill($input)->save();

        return redirect()->route('administrator.portafolio.index')->with('info', '!Evidencia Actualizada Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portafolio = Portafolio::find($id);

        if ( ! $portafolio) return view('administrator.pages.unauthorized');

        $portafolio->delete();

        return redirect()->route('administrator.portafolio.index')->with('info', '!Evidencia Eliminada Exitosamente!');
    }
}
