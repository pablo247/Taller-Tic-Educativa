@extends('layout.cv.layout')

@section('title', 'CV')

@section('header')
	<div class="uk-card-media-left uk-cover-container">
		<img src="/images/image_hero_default.jpg" alt="" uk-cover>
		<canvas width="200" height="400"></canvas>
	</div>
@endsection

@section('content')
	<div class="about-image uk-section">
		<div class="uk-container">
			<div class="about-image__image uk-cover-container uk-border-circle">
				<img src="/images/image_about_default.jpg" alt="" uk-cover>
				<canvas width="200" height="200"></canvas>
			</div>
		</div>
	</div>
	<div class="uk-container">
		<div class="about uk-section">
			<div class="uk-container">
				<div class="" uk-grid>
					<div class="about__social-networks uk-width-1-1 uk-width-1-5@m">
						<div class="about__social-networks--direction uk-flex uk-flex-wrap">
							<a href="" class="uk-icon-button  uk-margin-small-right" uk-icon="facebook"></a>
							<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="twitter"></a>
							<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="linkedin"></a>
							<a href="" class="uk-icon-button uk-margin-small-right" uk-icon="github"></a>
						</div>
					</div>
					<div class="uk-width-1-1 uk-width-4-5@m">
						<h1>Bessie Parker | <span class="uk-text-bold uk-text-middle uk-h4">Developer</span></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque ullam, eaque omnis repellendus inventore suscipit sapiente magnam quae, possimus earum odio vitae velit repellat dolores error quibusdam, harum blanditiis nesciunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, autem voluptatum laborum tempora laudantium quaerat doloremque ratione ipsum ipsa odit obcaecati earum qui ad fugiat sunt, voluptate cupiditate, quia quibusdam?</p>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="skills uk-section uk-text-center">
			<h2>Conocimientos</h2>

			<div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-flex-center uk-text-center" uk-grid>
				<div>
					<div class="uk-card uk-card-body">
						<img class="skills__image uk-width-small" src="/images/skills/monitor.svg" alt="Desarolo Web">
						<p>Desarrollo Web</p>
						<button class="uk-button uk-button-primary" uk-toggle="target: #web" type="button">Leer más</button>
					</div>
				</div>
				<div>
					<div class="uk-card uk-card-body">
						<img class="skills__image uk-width-small" src="/images/skills/app.svg" alt="Desarolo Móbil">
						<p>Desarolo Móbil</p>
						<button class="uk-button uk-button-primary" uk-toggle="target: #mobil" type="button">Leer más</button>
					</div>
				</div>
				<div>
					<div class="uk-card uk-card-body">
						<img class="skills__image uk-width-small" src="/images/skills/server.svg" alt="Base de Datos">
						<p>Base de Datos</p>
						<button class="uk-button uk-button-primary" uk-toggle="target: #database" type="button">Leer más</button>
					</div>
				</div>
				<div>
					<div class="uk-card uk-card-body">
						<img class="skills__image uk-width-small" src="/images/skills/globe.svg" alt="Seguridad Informatica">
						<p>Seguridad Informatica</p>
						<button class="uk-button uk-button-primary" uk-toggle="target: #security" type="button">Leer más</button>
					</div>
				</div>
			</div>

		</div>
		<hr>
		<div class="portfolio uk-section uk-text-center">
			<h2>Portafolio</h2>
			
			<div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-flex-center uk-text-center" uk-grid>
				<div>
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
						<a href="#">
							<img class="uk-width-medium" src="/images/portfolio/portfolio.jpg" alt="Desarolo Web">
							<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
								<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							</div>
						</a>
					</div>
				</div>
				<div>
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
						<a href="#">
							<img class="uk-width-medium" src="/images/portfolio/portfolio.jpg" alt="Desarolo Móbil">
							<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
								<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							</div>
						</a>
					</div>
				</div>
				<div>
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
						<a href="#">
							<img class="uk-width-medium" src="/images/portfolio/portfolio.jpg" alt="Base de Datos">
							<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
								<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							</div>
						</a>
					</div>
				</div>
				<div>
					<div class="uk-inline-clip uk-transition-toggle" tabindex="0">
						<a href="#">
							<img class="uk-width-medium" src="/images/portfolio/portfolio.jpg" alt="Seguridad Informatica">
							<div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-default">
								<p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="contact uk-section uk-text-center">
			<h2>Contacto</h2>

			<form>
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" placeholder="Nombre">
				</div>
		
				<div class="uk-margin">
					<input class="uk-input uk-form-width-large" type="text" placeholder="Correo Electrónico">
				</div>
		
				<div class="uk-margin">
					<textarea class="uk-textarea uk-form-width-large" rows="5" placeholder="Mensaje"></textarea>
				</div>

				<button class="uk-button uk-button-primary">Enviar</button>
			</form>
		</div>
	</div>
	<!-- Modals -->
	<div id="web" class="uk-flex-top" uk-modal>
		<div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
			<button class="uk-modal-close-default" type="button" uk-close></button>
			<h3 class="uk-modal-title">Desarrollo Mobil</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
		</div>
	</div>
	<div id="mobil" class="uk-flex-top" uk-modal>
		<div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
			<button class="uk-modal-close-default" type="button" uk-close></button>
			<h3 class="uk-modal-title">Desarolo Móbil</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
		</div>
	</div>
	<div id="web" class="uk-flex-top" uk-modal>
		<div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
			<button class="uk-modal-close-default" type="button" uk-close></button>
			<h3 class="uk-modal-title">Desarrollo Mobil</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
		</div>
	</div>
	<div id="database" class="uk-flex-top" uk-modal>
		<div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
			<button class="uk-modal-close-default" type="button" uk-close></button>
			<h3 class="uk-modal-title">Base de Datos</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
		</div>
	</div>
	<div id="security" class="uk-flex-top" uk-modal>
		<div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
			<button class="uk-modal-close-default" type="button" uk-close></button>
			<h3 class="uk-modal-title">Seguridad Informatica</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
		</div>
	</div>
@endsection
