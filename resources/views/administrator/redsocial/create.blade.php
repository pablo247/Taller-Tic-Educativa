@extends('layout.administrator.layout')

@section('title', 'Crear Red Social | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Redes Sociales
		<small>Nueva Red Social</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active"><a href="{{ route('administrator.redsocial.index') }}">Redes Socialales</a></li>
		<li class="active">Nueva Red Social</li>
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
					<h3 class="box-title">Red Social</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{ route('administrator.redsocial.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="titulo">Titulo</label>
							<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el nombre de la red social">
						</div>
						<div class="form-group">
							<label for="icono">Icono</label><small style="padding-left:3rem;">Los iconos los puedes descargar de <a href="https://www.flaticon.com">aquí</a> en un tamaño de 32px.</small>
							<input type="file" id="icono" name="icono">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Enviar</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
        </div>
    </div>
@endsection
