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

    <header class="uk-panel">
        @yield('header')
    </header>
    <main class="uk-panel" uk-height-viewport="expand: true" >
        @yield('content')
    </main>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
