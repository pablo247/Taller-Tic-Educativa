<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Auth;
use App\Http\Middleware\RolUsuarioMiddleware;
use App\Http\Requests\StoreUsuarioRequest;

use Illuminate\Support\Facades\Storage;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(RolUsuarioMiddleware::class)->except('show', 'edit', 'update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Usuario::orderBy('id', 'DESC')->paginate(5);
        return view('administrator.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsuarioRequest $request)
    {
        $user = new Usuario;

        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->correo = $request->correo;
        $user->usuario = $request->usuario;
        $user->password = bcrypt($request->password);
        if ($request->file('foto_perfil'))
        {
            $path = Storage::disk('public')->put('images/administrator/avatars', $request->file('foto_perfil'));
            $user->foto_perfil = asset($path);
        }
        else
            $user->foto_perfil = asset('images/administrator/avatars/default-avatar-160.png');

        $user->save();

        return redirect()->route('usuario.index')->with('info', '¡Usuario creado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
