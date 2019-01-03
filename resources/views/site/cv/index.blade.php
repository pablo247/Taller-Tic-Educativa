@extends('layout.site.cv.layout')

@section('title', 'Curriculum Vitae')

@section('image_header', $data['banner'])

@section('image_profile', $data['foto_perfil'])

@section('social_networks')
    @foreach ($data['redessociales'] as $redsocial)
    <a href="{{ $redsocial['url'] }}" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom">
		<img src="{{ $redsocial['icono'] }}" alt="{{ $redsocial['titulo'] }}">
	</a>
    @endforeach
@endsection

@section('about')
	<h1>{{ $data['nombre'] }} | <span class="uk-text-bold uk-text-middle uk-h4">{{ $data['titulo'] }}</span></h1>
	<p>{{ $data['acerca'] }}</p>
@endsection

@section('skills')
    @foreach ($data['conocimientos'] as $key => $conocimiento)
	<div>
		<div class="uk-card uk-card-body">
			<img class="skills__image uk-width-small" src="{{ $conocimiento['icono'] }}" alt="{{ $conocimiento['titulo'] }}">
			<p>{{ $conocimiento['titulo'] }}</p>
            <button class="uk-button uk-button-primary" uk-toggle="target: #modal{{ $key }}" type="button">Leer más</button>
		</div>
    </div>
    <div id="modal{{ $key }}" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <h3 class="uk-modal-title">{{ $conocimiento['titulo'] }}</h3>
            <p>{{ $conocimiento['descripcion'] }}</p>
        </div>
    </div>
    @endforeach
@endsection

@section('portfolio')
    @foreach ($data['portafolio'] as $key => $trabajo)    
    <div>
		<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
			<a href="{{ $trabajo['url'] }}">
                <img class="uk-width-medium" src="{{ $trabajo['imagen'] }}" alt="Desarolo Web">
				<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
					<p class="">{{ $trabajo['descripcion'] }}</p>
				</div>
			</a>
		</div>
    </div>
    @endforeach
@endsection

@section('redirectContact', route('curriculum.sendEmail', $data['id']))
