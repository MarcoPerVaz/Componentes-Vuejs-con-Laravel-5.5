<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 5.5 | Componentes Vuejs</title>

        {{-- Estilos --}}
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- Fin Estilos --}}
    </head>
    <body>
        {{-- Contenido --}}
            <div class="container">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2">

                        {{-- ID para usar vue --}}
                        <div id="app">
                            <h2 class="text-center">Captura tus ideas</h2>
                            <div class="well">
                                <h4>¿En qué estás pensando?</h4>
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control input-sm" maxlength="256">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary btn-sm">
                                                Agregar
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <hr>
                                <ul class="list-unstyled">
                                    <li>
                                        <p>
                                            <small class="text-muted">
                                                <em>hace un minuto</em>
                                            </small>
                                            Mi nueva idea
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        {{-- Fin Contenido --}}
    {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>
    {{-- FinScripts --}}
    </body>
</html>
