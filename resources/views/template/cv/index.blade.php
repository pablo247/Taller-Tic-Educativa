@extends('layout.site.cv.layout')

@section('title', 'CV')

@section('image_header', asset('/images/site/cv/images_header/image_hero_default.jpg'))

@section('image_profile', asset('/images/administrator/avatars/image_about_default.jpg'))

@section('social_networks')
	<a href="#" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom">
		<img src="{{asset('/images/site/cv/images_social-networks/facebook.svg')}}" alt="Facebook">
	</a>
	<a href="#" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom">
		<img src="{{asset('/images/site/cv/images_social-networks/twitter.svg')}}" alt="Twitter">
	</a>
	<a href="#" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom">
		<img src="{{asset('/images/site/cv/images_social-networks/linkedin.svg')}}" alt="Linkedin">
	</a>
	<a href="#" class="uk-icon-button uk-margin-small-right uk-margin-small-bottom">
		<img src="{{asset('/images/site/cv/images_social-networks/github.svg')}}" alt="Github">
	</a>
@endsection

@section('about')
	<h1>Bessie Parker | <span class="uk-text-bold uk-text-middle uk-h4">Developer</span></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ullam, eaque omnis repellendus inventore suscipit sapiente magnam quae, possimus earum odio vitae velit repellat dolores error quibusdam, harum blanditiis nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, autem voluptatum laborum tempora laudantium quaerat doloremque ratione ipsum ipsa odit obcaecati earum qui ad fugiat sunt, voluptate cupiditate, quia quibusdam?</p>
@endsection

@section('skills')
	<div>
		<div class="uk-card uk-card-body">
			<img class="skills__image uk-width-small" src="{{asset('/images/site/cv/images_skills/monitor.svg')}}" alt="Desarolo Web">
			<p>Desarrollo Web</p>
			<button class="uk-button uk-button-primary" uk-toggle="target: #web" type="button">Leer más</button>
		</div>
	</div>
	<div>
		<div class="uk-card uk-card-body">
			<img class="skills__image uk-width-small" src="{{asset('/images/site/cv/images_skills/app.svg')}}" alt="Desarolo Móbil">
			<p>Desarolo Móbil</p>
			<button class="uk-button uk-button-primary" uk-toggle="target: #mobil" type="button">Leer más</button>
		</div>
	</div>
	<div>
		<div class="uk-card uk-card-body">
			<img class="skills__image uk-width-small" src="{{asset('/images/site/cv/images_skills/server.svg')}}" alt="Base de Datos">
			<p>Base de Datos</p>
			<button class="uk-button uk-button-primary" uk-toggle="target: #database" type="button">Leer más</button>
		</div>
	</div>
	<div>
		<div class="uk-card uk-card-body">
			<img class="skills__image uk-width-small" src="{{asset('/images/site/cv/images_skills/globe.svg')}}" alt="Seguridad Informatica">
			<p>Seguridad Informatica</p>
			<button class="uk-button uk-button-primary" uk-toggle="target: #security" type="button">Leer más</button>
		</div>
	</div>
@endsection

@section('portfolio')
<div>
		<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
			<a href="#">
				<img class="uk-width-medium" src="{{asset('/images/site/cv/images_portfolio/portfolio.jpg')}}" alt="Desarolo Web">
				<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
					<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</a>
		</div>
	</div>
	<div>
		<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
			<a href="#">
				<img class="uk-width-medium" src="{{asset('/images/site/cv/images_portfolio/portfolio.jpg')}}" alt="Desarolo Móbil">
				<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
					<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</a>
		</div>
	</div>
	<div>
		<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
			<a href="#">
				<img class="uk-width-medium" src="{{asset('/images/site/cv/images_portfolio/portfolio.jpg')}}" alt="Base de Datos">
				<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
					<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</a>
		</div>
	</div>
	<div>
		<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
			<a href="#">
				<img class="uk-width-medium" src="{{asset('/images/site/cv/images_portfolio/portfolio.jpg')}}" alt="Seguridad Informatica">
				<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
					<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
				</div>
			</a>
		</div>
	</div>
@endsection