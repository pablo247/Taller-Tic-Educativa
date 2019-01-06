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
	@if (! isset($empty))
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

							@foreach ($dates as $key => $date)
							@php
								$array_date = explode('-', $date->date);
								$date = Carbon\Carbon::createFromDate(intval($array_date[0]), intval($array_date[1]));
								$date = $date->format('M, Y');
							@endphp
							<td class="dates__item uk-padding-remove {{ $date_format == $date ? 'dates__item--selected' : '' }}" data-numitem="{{ $key + 1 }}">
								<a class="date__link uk-margin-small-left uk-margin-small-right uk-text-center {{ $date_format == $date ? 'dates__link--selected' : '' }}" href="{{ route('blog', [$array_date[1], $array_date[0]]) }}">{{$date}}</a>
							</td>
							@endforeach

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

				@foreach ($publications as $key => $publication)
					@if ((intval($key) + 1) % 2 == 1)
					<li class="timeline__item">
						<span class="uk-badge day">{{ $publication->day }}</span>
						<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
							<div class="card__image uk-card-media-left uk-cover-container uk-width-1-3@s">
								<img src="{{ $publication->imagen }}" alt="" uk-cover>
								<canvas width="200" height="150"></canvas>
							</div>
							<div class="uk-width-2-3@s">
								<div class="uk-card-body">
									<h3 class="uk-card-title"><a href="{{ route('articulo.show', $publication->alias) }}">{{ $publication->titulo }}</a></h3>
									<p class="uk-article-meta uk-text-left">{{ $publication->date }}</p>
									<p class="uk-text-left">{{ $publication->introduccion }}</p>
								</div>
							</div>
						</div>
					</li>
					@else
					<li class="timeline__item">
						<span class="uk-badge day">{{ $publication->day }}</span>
						<div class="card uk-card uk-card-small uk-grid-collapse uk-margin" uk-grid>
							<div class="card__image uk-flex-last@s uk-card-media-right uk-cover-container uk-width-1-3@s">
								<img src="{{ $publication->imagen }}" alt="" uk-cover>
								<canvas width="200" height="150"></canvas>
							</div>
							<div class="uk-width-2-3@s">
								<div class="uk-card-body">
									<h3 class="uk-card-title"><a href="{{ route('articulo.show', $publication->alias) }}">{{ $publication->titulo }}</a></h3>
									<p class="uk-article-meta uk-text-left">{{ $publication->date }}</p>
									<p class="uk-text-left">{{ $publication->introduccion }}</p>
								</div>
							</div>
						</div>
					</li>
					@endif
				@endforeach
				
			</ul>
		</section>
	</div>
	@else
		<p>Aún no hay publicaciones</p>
	@endif
@endsection
