<?php

namespace App\Http\Controllers;

use App\Curriculum;
use Illuminate\Http\Request;

use Auth;
use App\Http\Middleware\FormCurriculumMiddleware;
use App\Http\Middleware\AccessOnlyOwnCurriculumMiddleware;

use App\Http\Requests\SaveCurriculumRequest;

use Illuminate\Support\Facades\Storage;

class CurriculumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(FormCurriculumMiddleware::class)->except(['edit', 'update']);
        $this->middleware(AccessOnlyOwnCurriculumMiddleware::class)->only(['edit', 'update']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.cv.create');
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

        if ($curriculum) return view('administrator.cv.edit', compact('curriculum'));

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

        $input = $request->all();
        
        if ($request->file('banner'))
        {
            $path = Storage::disk('public')->put('images/site/cv/images_header', $request->file('banner'));
            $input = array_merge($input, ['banner' => asset($path)]);
        }
        
        $curriculum = $curriculum->fill($input)->save();

        return back()->with('info', 'Información Guardada Correctamente.');
    }
}
