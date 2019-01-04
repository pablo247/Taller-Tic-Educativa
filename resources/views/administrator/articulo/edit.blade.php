@extends('layout.administrator.layout')

@section('title', 'Editar Artículo | TIC Educativa')

@section('styles')

@endsection

@section('scripts')

<script>
	$(function () {
		CKEDITOR.replace('contenido');
	});

	var fechas = @json($fechas);

	//Date picker
    $('#datepicker').datepicker({
		autoclose: true,
		format: 'dd-mm-yyyy',
    	datesDisabled: fechas
	});

	$(document).ready(function () {

		$("#titulo").keyup(function (e){
			$("#alias").val( slug( $(e.currentTarget).val() ).toLowerCase() );
		});

		$("#titulo, #alias").focusout(function (e){
			$("#alias").val( slug( $(e.currentTarget).val() ).toLowerCase() );
		});

	});

</script>

@endsection

@section('content_header')

	<h1>
		Artículos
		<small>Editar Artículo</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class=""><a href="{{ route('administrator.articulo.index') }}">Artículos</a></li>
		<li class="active">Editar Artículo</li>
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
					<h3 class="box-title">Artículo</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{ route('administrator.articulo.update', $articulo->id) }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="box-body">
						<div class="form-group">
							<label for="titulo">Título del Artículo</label>
							<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del artículo" value="{{ $articulo->titulo }}">
						</div>
						<div class="form-group">
							<label for="alias">Alias del Artículo</label>
							<input type="text" class="form-control" id="alias" name="alias" placeholder="Ingrese la url del artículo" value="{{ $articulo->alias }}">
						</div>
						@if (Auth::user()->rol == 'super usuario')
						<div class="form-group">
							<label for="alias" style="margin-right:3rem;">Publicado</label>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-primary {{ $articulo->publicado ? 'active' : '' }}">
									<input type="radio" name="publicado" id="publicado1" autocomplete="off" value="1" {{ $articulo->publicado ? 'checked' : '' }}> Publicado
								</label>
								<label class="btn btn-primary {{ $articulo->publicado ? '' : 'active' }}">
									<input type="radio" name="publicado" id="publicado2" autocomplete="off" value="0" {{ $articulo->publicado ? '' : 'checked' }}> Despublicado
								</label>
							</div>
						</div>
						@else
						<div class="form-group">
							<p>Si edita este Artículo se despublicara y sera necesario que los cambios se aprueben por un Administrador del Sitio</p>
						</div>
						@endif
						<div class="form-group">
							<label for="fecha_publicacion">Fecha de Publicación:</label>
							<div class="input-group date">
								<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" name="fecha_publicacion" id="datepicker" value="{{ $articulo->fecha_publicacion }}"">
							</div>
						</div>
						<div class="form-group">
							<label for="introduccion">Introducción del Artículo</label>
							<textarea class="form-control" rows="3" id="introduccion" name="introduccion" placeholder="Ingrese una breve descripción del artículo">{{ $articulo->introduccion }}</textarea>
						</div>
						<div class="form-group">
							<label for="contenido">Contenido del Artículo</label>
							<textarea class="form-control" rows="3" id="contenido" name="contenido" placeholder="Ingrese el contenido del artículo">{{ $articulo->contenido }}</textarea>
						</div>
						<div class="form-group">
							<label for="imagen" style="margin-right:5rem;">Imagen de Publicación</label>
							<img class="img-responsive img-thumbnail" src="{{ $articulo->imagen }}" alt="Banner de artículo" style="width:150px;">
							<input type="file" id="imagen" name="imagen">
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Actualizar Arículo</button>
					</div>
				</form>
			</div>
			<!-- /.box -->
        </div>
    </div>
@endsection
