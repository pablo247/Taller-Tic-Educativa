@extends('layout.administrator.layout')

@section('title', 'Lista de Usuarios | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('account')

	<li class="dropdown user user-menu">
		<!-- Menu Toggle Button -->
		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		<!-- The user image in the navbar-->
		<img src="{{ Path_Images::path_images_users() }}{{ Auth::user()->foto_perfil }}" class="user-image" alt="User Image">
		<!-- hidden-xs hides the username on small devices so only the image appears. -->
        <span class="hidden-xs">{{ Auth::user()->nombre }}</span>
		</a>
		<ul class="dropdown-menu">
		<!-- The user image in the menu -->
		<li class="user-header">
			<img src="{{ Path_Images::path_images_users() }}{{ Auth::user()->foto_perfil }}" class="img-circle" alt="User Image">

			<p>
			{{ Auth::user()->nombre . ' ' . Auth::user()->apellido }}
            <small>Miembro desde {{ Auth::user()->created_at->format('M, Y') }}</small>
			</p>
		</li>
		<!-- Menu Footer-->
		<li class="user-footer">
			<div class="pull-left">
				<a href="#" class="btn btn-default btn-flat">Profile</a>
			</div>
			<div class="pull-right">

				<a href="{{ route('logout') }}"
					class="btn btn-default btn-flat"
					onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
					Cerrar Sesión
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>

			</div>
		</li>
		</ul>
	</li>

@endsection


@section('content_header')

	<h1>
		Usuarios
		<small>Lista de Usuarios</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i></a></li>
		<li class="active">Usuarios</li>
	</ol>
	
@endsection

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Usuarios</h3>
                    <a href="{{ route('usuario.create') }}" class="btn btn-primary btn-sm pull-right">Crear Usuario</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="width: 20px">Id</th>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Usuario</th>
                                <th>Rol</th>
                                <th style="width: 30px"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->nombre}}</td>
                                    <td>{{$user->correo}}</td>
                                    <td>{{$user->usuario}}</td>
                                    <td>{{$user->rol}}</td>
                                    <td>
                                        <a href="{{ route('usuario.edit', $user->id) }}" class="btn btn-block btn-warning btn-sm">Editar</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No hay información</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $users->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
