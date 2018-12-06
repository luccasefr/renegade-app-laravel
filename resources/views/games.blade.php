<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GAMES</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/games.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    @include('layouts.menu')

    <div class="jeep">
        <img class="imageJeep" src={{asset('imgs/marca-horizontal.png')}}>
        <p class="textoJeep"">MAIS DESEMPENHO E EFICIÊNCIA</p>
    </div>

    <div class=" titulo">
            <div class="row">
                <div class="col-sm-4 linha">
                    <hr>
                </div>
                <div class="col-sm-4 linha">
                    <h1 class="tituloTexto">
                        JOGOS
                    </h1>
                </div>
                <div class="col-sm-4 linha">
                    <hr>
                </div>
            </div>
            <h2 class="tituloTexto2">
                SELECIONE UMA IMAGEM, MONTE SEU QUEBRA-CABEÇA E BOA SORTE!
            </h2>
    </div>

    <div class="game">
            <div class="gameDiv">
                <a href={{ asset('quebra-cabeca/teste.html') }}>
                    <img class="imageGame hvr-buzz-out hvr-glow" src={{asset('imgs/qcbc_1.jpg')}} onclick="showIFrame()" />
                </a>
            </div>

            <div class="gameDiv">
                <a href={{ asset('quebra-cabeca/teste.html') }}>
                    <img class="imageGame hvr-buzz-out hvr-glow" src={{asset('imgs/qcbc_2.jpg')}} />
                </a>
            </div>

            <div class="gameDiv">
                <a href={{ asset('quebra-cabeca/teste.html') }}>
                    <img class="imageGame hvr-buzz-out hvr-glow" src={{asset('imgs/qcbc_3.jpg')}} />
                </a>
            </div>
    </div>
    
    <!-- Trigger the modal with a button 
    <a href="#" class="btn btn-info btn-lg">Open Modal</a>

    <!-- Modal 
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
-->
</body>
<script>
    $('a').on("click", function () {
        $('#myModal').modal('show');
    });


</script>
<!--<script src="{{ asset('js/games.js')}}"></script>-->

</html>