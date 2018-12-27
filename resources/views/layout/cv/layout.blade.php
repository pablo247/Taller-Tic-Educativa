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
        <div class="uk-card-media-left uk-cover-container">
            <img src="/images/image_hero_default.jpg" alt="" uk-cover>
            <canvas width="200" height="400"></canvas>
        </div>
    </header>
    <main class="uk-panel" uk-height-viewport="expand: true" >
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
                        <div class="uk-width-1-1 uk-width-1-3@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                Redes Sociales
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-2-3@s">
                            <div class="uk-card uk-card-default uk-card-body">
                                <p>Bessie Parker | developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills uk-section">
                <div class="uk-container">Skills</div>
            </div>
            <div class="portfolio uk-section">
                <div class="uk-container">Portfolio</div>
            </div>
            <div class="contact uk-section">
                <div class="uk-container">Contact</div>
            </div>
        </div>
    </main>

    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
