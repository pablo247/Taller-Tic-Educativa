@extends('layout.administrator.layout')

@section('title', 'Curriculum Vitae | TIC Educativa')

@section('styles')
    
@endsection

@section('scripts')

@endsection

@section('content_header')

	<h1>
		Curriculum Vitae
		<small>Información Básica</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i></a></li>
		<li class="">CV</li>
		<li class="active">Información Básica</li>
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
                    <h3 class="box-title">Información Básica</h3>
                    {{-- <a href="{{ route('curriculum.template', Auth::user()->id) }}" target="_blank" class="btn btn-primary btn-sm pull-right">Ver Perfil</a> --}}
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method="POST" action="{{ route('administrator.curriculum.store') }}" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="titulo">Título Personal</label>
							<input type="text" class="form-control" id="titulo" name="titulo" placeholder="p. ej. Desarrollador Web">
						</div>
						<div class="form-group">
							<label for="acerca">Acerca</label>
                            <textarea class="form-control" rows="3" id="acerca" name="acerca" placeholder="Información acerca de ti"></textarea>
						</div>
						<div class="form-group">
							<label for="mensaje_contacto">Mensaje de Contacto</label>
							<input type="text" class="form-control" id="mensaje_contacto" name="mensaje_contacto" value="Gracias por tu mensaje, nos pondremos en contacto a la brevedad.">
						</div>
						<div class="form-group">
							<p><small>Puedes descargar banners de buena calidad y gratis <a href="https://unsplash.com/search/photos/banner" target="_blank">aquí</a></small></p>
                            <label for="banner" style="margin-right:5rem;">Banner de Encabezado de Página</label>
                            <img class="img-responsive img-thumbnail" src="{{ asset('images/site/cv/images_header/image_hero_default.jpg') }}" alt="Banner de encabeza de página" style="width:150px;">
							<input type="file" id="banner" name="banner">
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
