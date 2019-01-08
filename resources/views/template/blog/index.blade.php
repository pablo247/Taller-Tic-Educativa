@extends('layout.site.blog.layout')

@section('title', 'Blog')

@section('styles')
	{{-- Ingrese los archivos CSS --}}
@endsection

@section('scripts')
	{{-- Ingrese los archivos JavaScript --}}
@endsection

@section('content')
	<h1 class="uk-text-center">Blog</h1>
	<section id="calendar" class="calendar uk-margin-auto">
		<button id="calendar__button-preview" class="uk-button uk-button-secondary uk-button-small uk-border-rounded calendar__button">
			<span class="calendar__button--icon" uk-icon="icon: chevron-left; ratio: 1.5"></span>
		</button>
		<div id="dates" class="dates uk-margin-small-left uk-margin-small-right">
			<div id="dates-overflow--hidden" class="dates-overflow--hidden uk-overflow-auto">
				<table class="uk-table">
					<tbody>
						<tr>
							<td id="dates__item--first" class="dates__item dates__item--first uk-padding-remove"></td>
							<td class="dates__item dates__item--selected uk-padding-remove" data-numitem="1">
								<a class="date__link dates__link--selected uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Abr, 2018</a>
							</td>
							<td class="dates__item uk-padding-remove" data-numitem="2">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center" href="#">May, 2018</a>
							</td>
							<td class="dates__item uk-padding-remove" data-numitem="3">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Jun, 2018</a>
							</td>
							<td class="dates__item uk-padding-remove" data-numitem="4">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Jul, 2018</a>
							</td>
							<td class="dates__item uk-padding-remove" data-numitem="5">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Ago, 2018</a>
							</td>
							<td class="dates__item uk-padding-remove" data-numitem="6">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Sep, 2018</a>
							</td>
							<td class="dates__item  uk-padding-remove" data-numitem="7">
								<a class="date__link  uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Oct, 2018</a>
							</td>
							<td class="dates__item  uk-padding-remove" data-numitem="8">
								<a class="date__link  uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Nov, 2018</a>
							</td>
							<td class="dates__item  uk-padding-remove" data-numitem="9">
								<a class="date__link  uk-margin-small-left uk-margin-small-right uk-text-center" href="#">Dec, 2018</a>
							</td>
							<td class="dates__item dates__item--end uk-padding-remove"></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<button id="calendar__button-next" class="uk-button uk-button-secondary uk-button-small uk-border-rounded calendar__button">
			<span uk-icon="icon: chevron-right; ratio: 1.5"></span>
		</button>
	</section>
	<div class="uk-flex-center" uk-grid>
		<section class="days uk-width-1-1 uk-width-4-5@s uk-width-2-5@m uk-width-3-6@m uk-text-center">
			<ul class="timeline">
				<li class="timeline__item">
					<span class="uk-badge day">30</span>
					<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
						<div class="card__image uk-card-media-left uk-cover-container uk-width-1-3@s">
							<img src="{{asset('images/site/images_articles/image_article.jpg')}}" alt="" uk-cover>
							<canvas width="200" height="150"></canvas>
						</div>
						<div class="uk-width-2-3@s">
							<div class="uk-card-body">
								<h3 class="uk-card-title"><a href="#">Article Title</a></h3>
								<p class="uk-article-meta uk-text-left">Septiembre 30, 2018.</p>
								<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>
				</li>
				<li class="timeline__item">
					<span class="uk-badge day">3</span>
					<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
						<div class="card__image uk-flex-last@s uk-card-media-right uk-cover-container uk-width-1-3@s">
							<img src="{{asset('images/site/images_articles/image_article.jpg')}}" alt="" uk-cover>
							<canvas width="200" height="150"></canvas>
						</div>
						<div class="uk-width-2-3@s">
							<div class="uk-card-body">
								<h3 class="uk-card-title"><a href="#">Article Title</a></h3>
								<p class="uk-article-meta uk-text-left">Septiembre 30, 2018.</p>
								<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>
				</li>
				<li class="timeline__item">
					<span class="uk-badge day">2</span>
					<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
						<div class="card__image uk-card-media-left uk-cover-container uk-width-1-3@s">
							<img src="{{asset('images/site/images_articles/image_article.jpg')}}" alt="" uk-cover>
							<canvas width="200" height="150"></canvas>
						</div>
						<div class="uk-width-2-3@s">
							<div class="uk-card-body">
								<h3 class="uk-card-title"><a href="#">Article Title</a></h3>
								<p class="uk-article-meta uk-text-left">Septiembre 30, 2018.</p>
								<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>
				</li>
				<li class="timeline__item">
					<span class="uk-badge day">1</span>
					<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
						<div class="card__image uk-flex-last@s uk-card-media-right uk-cover-container uk-width-1-3@s">
							<img src="{{asset('images/site/images_articles/image_article.jpg')}}" alt="" uk-cover>
							<canvas width="200" height="150"></canvas>
						</div>
						<div class="uk-width-2-3@s">
							<div class="uk-card-body">
								<h3 class="uk-card-title"><a href="#">Article Title</a></h3>
								<p class="uk-article-meta uk-text-left">Septiembre 30, 2018.</p>
								<p class="uk-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</section>
	</div>
@endsection
