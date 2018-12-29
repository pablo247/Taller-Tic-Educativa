<!DOCTYPE html>
<html lang="es">
<head>
    @include('layout.site.blocks.metas')
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

    @include('layout.site.blocks.scripts')
</body>
</html>
