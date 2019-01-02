@extends('layout.administrator.layout')

@section('title', 'Crear Evidencia | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Portafolio
		<small>Nueva Evidencia</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active"><a href="{{ route('administrator.portafolio.index') }}">Portafolio</a></li>
		<li class="active">Nueva Evidencia</li>
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
					<h3 class="box-title">Evidencia</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{ route('administrator.portafolio.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="descripcion">Descripción</label>
							<textarea class="form-control" rows="3" id="descripcion" name="descripcion" placeholder="Ingrese una breve descripción de la evidencia"></textarea>
						</div>
						<div class="form-group">
							<label for="url">URL de tu evidencia</label>
							<input type="text" class="form-control" id="url" name="url" placeholder="Ingrese la URL de la evidencia">
						</div>
						<div class="form-group">
							<label for="imagen">Vista previa</label>
							<input type="file" id="imagen" name="imagen">
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
