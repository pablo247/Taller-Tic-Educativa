@extends('layout.administrator.layout')

@section('title', 'Editar Usuario | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Usuarios
		<small>Edición de Usuario</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class=""> <a href="{{ route('usuario.index') }}">Usuarios</a></li>
		<li class="active">Editar Usuario</li>
	</ol>
	
@endsection

@section('content')

	@if (count($errors))
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
    @endif

	<div class="row">
		<!-- left column -->
		<div class="col-md-8 col-md-offset-2">
			<!-- general form elements -->
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Editar Usuario</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
                <form role="form" method="POST" action="{{ route('usuario.update', $user->id) }}" enctype="multipart/form-data">
					<div class="box-body">
						<div class="form-group">
							<label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su nombre" value="{{ $user->nombre }}">
						</div>
						<div class="form-group">
							<label for="apellido">Apellido</label>
							<input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su apellido" value="{{ $user->apellido }}">
						</div>
						<div class="form-group">
							<label for="correo">Correo Electrónico</label>
							<input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresu su correo" value="{{ $user->correo }}">
						</div>
						<div class="form-group">
							<label for="usuario">Usuario</label>
							<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" value="{{ $user->usuario }}">
						</div>
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña">
						</div>
						<div class="form-group">
                            <label for="foto_perfil" style="margin-right:5rem;">Foto de Perfil</label>
                            <img class="img-responsive img-circle img-thumbnail" src="{{ $user->foto_perfil }}" alt="User profile picture" style="width:100px; height:100px;">
							<input type="file" id="foto_perfil" name="foto_perfil">
                        </div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
				</form>
			</div>
			<!-- /.box -->
        </div>
    </div>
@endsection
