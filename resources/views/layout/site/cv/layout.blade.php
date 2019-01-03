<!DOCTYPE html>
<html lang="es">
<head>
    @include('layout.site.blocks.metas')
</head>
<body>

    <header class="uk-panel">
        <div class="uk-card-media-left uk-cover-container">
            <img src="@yield('image_header')" alt="" uk-cover>
            <canvas width="200" height="400"></canvas>
        </div>
    </header>
    <main class="uk-panel" uk-height-viewport="expand: true" >
        <div class="about-image uk-section">
            <div class="uk-container">
                <div class="about-image__image uk-cover-container uk-border-circle">
                    <img src="@yield('image_profile')" alt="" uk-cover>
                    <canvas width="200" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="uk-container">
            <div class="about uk-section">
                <div class="uk-container">
                    <div class="" uk-grid>
                        <div class="about__social-networks uk-width-1-1 uk-width-1-5@m">
                            <div class="about__social-networks--direction uk-flex uk-flex-wrap">
                                @yield('social_networks')
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-4-5@m">
                            @yield('about')
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="skills uk-section uk-text-center">
                <h2>Conocimientos</h2>
    
                <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-flex-center uk-text-center" uk-grid>
                    @yield('skills')
                </div>
    
            </div>
            <hr>
            <div class="portfolio uk-section uk-text-center">
                <h2>Portafolio</h2>
                
                <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-flex-center uk-text-center" uk-grid>
                    @yield('portfolio')
                </div>
            </div>
            <hr>
            <div class="contact uk-section uk-text-center">
                <h2 id="contacto">Contacto</h2>

                @if (session('info'))
                    <div class="uk-alert-primary" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ session('info') }}</p>
                    </div>
                @endif

                @if (session('error'))
                    <div class="uk-alert-danger" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ session('error') }}</p>
                    </div>
                @endif

                @if (count($errors))
                <div class="uk-alert-danger" uk-alert>
                    <a class="uk-alert-close" uk-close></a>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
    
                <form method="POST" action="@yield('redirectContact')">
                    <div class="uk-margin">
                        <input name="name" class="uk-input uk-form-width-large" type="text" placeholder="Nombre">
                    </div>
            
                    <div class="uk-margin">
                        <input name="email" class="uk-input uk-form-width-large" type="text" placeholder="Correo Electrónico">
                    </div>
            
                    <div class="uk-margin">
                        <textarea name="message" class="uk-textarea uk-form-width-large" rows="5" placeholder="Mensaje"></textarea>
                    </div>
    
                    <button type="submit" class="uk-button uk-button-primary">Enviar</button>

                    {{ csrf_field() }}
                </form>
            </div>
        </div>
        <!-- Modals -->
        <div id="web" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3 class="uk-modal-title">Desarrollo Mobil</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
            </div>
        </div>
        <div id="mobil" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3 class="uk-modal-title">Desarolo Móbil</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
            </div>
        </div>
        <div id="web" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3 class="uk-modal-title">Desarrollo Mobil</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
            </div>
        </div>
        <div id="database" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3 class="uk-modal-title">Base de Datos</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
            </div>
        </div>
        <div id="security" class="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-margin-auto-vertical uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h3 class="uk-modal-title">Seguridad Informatica</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga delectus enim, totam porro ex voluptatibus eos labore doloribus facere accusantium error ipsum voluptatem officia, dolore neque reprehenderit! Soluta, dolorum minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur distinctio accusantium iusto minima reprehenderit! A architecto praesentium iste, corrupti exercitationem dolorem corporis molestias soluta nam quisquam similique dolore eos nihil?</p>
            </div>
        </div>

    </main>

    @include('layout.site.blocks.scripts')
</body>
</html>
