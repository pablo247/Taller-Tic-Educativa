@extends('layout.administrator.layout')

@section('title', 'Editar Conocimiento | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Conocimientos
		<small>Editar Conocimeinto</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active"><a href="{{ route('administrator.conocimiento.index') }}">Conocimientos</a></li>
		<li class="active">Editar Conocimiento</li>
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
					<h3 class="box-title">Conocimiento</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{ route('administrator.conocimiento.update', $conocimiento->id) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="box-body">
						<div class="form-group">
							<label for="titulo">Nombre de Conocimiento</label>
							<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el nombre del conocimiento adquirido" value="{{ $conocimiento->titulo }}">
						</div>
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Describe el conocimiento adquirido">{{ $conocimiento->descripcion }}</textarea>
						</div>
						<div class="form-group">
							<label for="icono">Icono</label><small style="padding-left:3rem;">Los iconos los puedes descargar de <a href="https://www.flaticon.com" target="_blank">aquí</a> en un tamaño de 512px, preferentemente con tono de color <em style="color:#62C09E;">#62C09E</em>.</small>
							<img src="{{ $conocimiento->icono }}" alt="icono" style="width:50px">
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
