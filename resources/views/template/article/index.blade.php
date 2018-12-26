@extends('layout.blog.layout')

@section('title', 'Artículo')

@section('styles')
	{{-- Ingrese los archivos CSS --}}
@endsection

@section('scripts')
	{{-- Ingrese los archivos JavaScript --}}
@endsection

@section('content')
	<article class="uk-article">

		<div class="uk-card-media-left uk-cover-container">
			<img src="/images/image_article.jpg" alt="" uk-cover>
			<canvas width="200" height="300"></canvas>
		</div>

		<h1 class="uk-article-title uk-text-center">Artículo</h1>

		<div class="uk-flex uk-flex-between uk-flex-wrap uk-margin uk-margin-large-left uk-margin-large-right">
			<span class="uk-article-meta">Septiembre 30, 2018.</span>
			<span class="uk-article-meta">Publicado por: <a href="#">Super User</a></span>
		</div>

		<div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam modi ratione aut odio nostrum inventore mollitia eum unde. Debitis quidem esse qui ad rerum voluptatibus, non animi error repellendus harum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo aliquam temporibus doloremque hic ex dignissimos nesciunt consequatur totam perferendis, ab placeat delectus possimus enim cum earum, sed ullam fuga dolores. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Animi nesciunt sit corrupti molestias consequuntur quam, ratione omnis, facere dolor eius et similique unde impedit eveniet porro rerum sapiente, quod quasi.</p>

			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus ab tenetur provident magni, modi incidunt excepturi eligendi animi nisi corrupti quisquam quasi, nobis voluptatum error. Aliquid rerum cupiditate sed suscipit.</p>

			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae architecto quos, vel doloremque dignissimos quidem assumenda, dolores eaque alias asperiores totam doloribus sit! Dolorum dolor omnis tempore aperiam. Ipsum, sapiente. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, ipsa? Molestiae nobis, odit deleniti quaerat consequatur rerum ut delectus voluptates, dolorum atque doloremque nemo dolorem eligendi veniam, dignissimos natus nam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non in dolores repellendus aut nobis ipsum error libero, fuga sapiente sunt porro, veniam quae quas ipsam dignissimos doloribus a temporibus harum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut earum, aliquam voluptas, nostrum rerum, molestias doloribus nulla quia dignissimos perferendis quaerat natus corporis ad ex voluptates possimus qui numquam. Nobis? Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore iusto, non provident, autem blanditiis fugit amet eaque quam incidunt officia voluptates ipsum, voluptatum illo quidem eveniet architecto a velit natus?</p>
		</div>
			
	</article>
@endsection
