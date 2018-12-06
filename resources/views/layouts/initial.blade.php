<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="{{ asset('js/js.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/initial.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" />
    

    {{-- Alert --}}
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}

</head>

<body>
    @include('layouts.menu')
    <div class="jeep">
        <img class="imageJeep" src={{asset('imgs/marca-horizontal.png')}}>
        <p class="textoJeep">MAIS DESEMPENHO E EFICIÊNCIA</p>
    </div>

    <div class=" titulo">
            <div class="row">
                <div class="col-sm-4 linha">
                    <hr>
                </div>
                <div class="col-sm-4 linha">
                    <h1 class="tituloTexto">
                        CADASTRE-SE
                    </h1>
                </div>
                <div class="col-sm-4 linha">
                    <hr>
                </div>
            </div>
            <h2 class="tituloTexto2">
                PREENCHA SEUS DADOS E CONCORRA A PRÊMIOS INCRÍVEIS!
            </h2>
    </div>
    <div>
        <div class="container">
            @yield('content')
        </div>
    </div>
    
</body>
</html>
