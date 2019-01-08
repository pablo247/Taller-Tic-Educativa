@extends('layout.site.blog.layout')

@section('title', $article->titulo)

@section('styles')
	{{-- Ingrese los archivos CSS --}}
@endsection

@section('scripts')
	{{-- Ingrese los archivos JavaScript --}}
@endsection

@section('content')
	<article class="uk-article">

		<div class="uk-card-media-left uk-cover-container">
            <img src="{{ asset($article->imagen) }}" alt="" uk-cover>
			<canvas width="200" height="300"></canvas>
		</div>

		<h1 class="uk-article-title uk-text-center">{{ $article->titulo }}</h1>

		<div class="uk-flex uk-flex-between uk-flex-wrap uk-margin uk-margin-large-left uk-margin-large-right">
			<span class="uk-article-meta">{{ $article->fecha_publicacion }}</span>
            <span class="uk-article-meta">Publicado por: <a href="{{ route('curriculum.template', $article->usuario->id) }}">{{ $article->usuario->usuario }}</a></span>
		</div>

		<div>
			{!! $article->contenido !!}
		</div>
			
	</article>
@endsection
