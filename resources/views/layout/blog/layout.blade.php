<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Blog para el Taller \"Planeación y Desarrollo de un Sitio Web\"">
    <meta name="keywords" content="blog, tic educativa, curriculum vitae" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Documento') | TIC Educativa</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('styles')
</head>
<body>

    <header class="uk-panel uk-padding uk-padding-small header--background uk-light">
        <div class="uk-container">
            <a class="uk-logo" href="#"><img class="uk-width-2-5 uk-width-1-5@s uk-width-1-6@m" src="/images/logo_TICeducativa_blanco.png" alt="Logotipo Tic Educativa"></a>
        </div>
    </header>
    <main class="uk-panel uk-padding" uk-height-viewport="expand: true" >
        <div class="uk-container">
            @yield('content')
        </div>
    </main>
    <footer class="uk-panel uk-padding uk-padding-small footer--background uk-light">
        <div class="uk-container"> <p class="uk-text-center"> Copyright </p> </div>
    </footer>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
