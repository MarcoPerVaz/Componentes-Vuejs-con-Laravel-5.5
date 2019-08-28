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

                            {{-- Componente Idea --}}
                                <idea></idea>

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
