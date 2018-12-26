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
            <div class="uk-grid" style="background: red;">
                <section class="uk-width-2-5 uk-text-right">articles</section>
                <section class="days uk-width-1-5 uk-text-center">days</section>
                <section class="uk-width-2-5">articles</section>
            </div>
        </div>
    </main>
    <footer class="uk-panel uk-padding uk-padding-small footer--background uk-light">
        <div class="uk-container"> <p class="uk-text-center"> Copyright </p> </div>
    </footer>


    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
