<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Blog para el Taller \"Planeación y Desarrollo de un Sitio Web\"">
    <title>@yield('title', 'Documento') | TIC Educativa</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @yield('styles')
</head>
<body>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
