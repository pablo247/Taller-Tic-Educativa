<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RedSocial;

use Auth;

use App\Http\Requests\StoreRedSocialRequest;
use App\Http\Requests\UpdateRedSocialRequest;

use Illuminate\Support\Facades\Storage;

class RedSocialController extends Controller
{

    public function __contruct()
    {
        $this->middleware('Auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redessociales = RedSocial::orderBy('id', 'DESC')->paginate(5);
        return view('administrator.redsocial.index', compact('redessociales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.redsocial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRedSocialRequest $request)
    {
        if ($request->file('icono'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_social-networks', $request->file('icono'));
            $path = asset($path);
        }

        $redsocial = RedSocial::create(array_merge($request->all(), ['icono' => $path]));

        return redirect()->route('administrator.redsocial.index')->with('info', '!Red Social Creada Exitosamente!');
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
        $redsocial = RedSocial::find($id);

        if ($redsocial) return view('administrator.redsocial.edit', compact('redsocial'));

        return view('administrator.pages.unauthorized');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRedSocialRequest $request, $id)
    {
        $redsocial = RedSocial::find($id);

        if ( ! $redsocial) return view('administrator.pages.unauthorized');

        $input = $request->all();

        if ($request->file('icono'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_social-networks', $request->file('icono'));
            $input['icono'] = asset($path);
        }

        $redsocial->fill($input)->save();

        return redirect()->route('administrator.redsocial.index')->with('info', '!Red Social Actualizada Exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
