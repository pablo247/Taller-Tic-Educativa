<!DOCTYPE html>
<html lang="es">
<head>
    <title>Página 404</title>
    @include('layout.site.blocks.metas')
</head>
<body>

    <header class="uk-panel uk-padding uk-padding-small header--background uk-light">
        <div class="uk-container">
            <a class="uk-logo" href="{{route('blog')}}"><img class="uk-width-2-5 uk-width-1-5@s uk-width-1-6@m" src="{{asset('images/logo_TICeducativa_blanco.png')}}" alt="Logotipo Tic Educativa"></a>
        </div>
    </header>
    <main class="uk-background-blend-soft-light uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle uk-flex-column" style="background-image: url({{ asset('images/error/404.jpg') }}); background-color: rgb(203, 203, 203);"  uk-height-viewport="expand: true">

        <h1 class="uk-display-block" style="font-size:150px; font-weight: bold;">404</h1>
        <p class="uk-text-lead">Pagina no encontrada</p>
        <a class="uk-text-large" href="{{route('blog')}}">Regresar al inicio</a>

    </main>

    @include('layout.site.blocks.scripts')
</body>
</html>
