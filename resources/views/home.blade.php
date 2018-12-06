<html>

<head>
    <title>App Name</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/home.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="titulo">
        <div class="titulo2">
            <img src={{asset('imgs/logo_jeep-renegade-furada.png')}}>
        </div>
    </div>

    <div class="container">
        <div class="card-deck">
            <div class="car">
                <a class="homeLink" href="../home">
                    <div class="textDiv">
                        <img class="ico" src={{asset('imgs/ico_grade.png')}}>
                        <p class="text">HOME</p>
                    </div>
                </a>
            </div>

            <div class="car">
                <a class="homeLink" href="../registers/create">
                    <div class="textDiv">
                        <img class="ico" src={{asset('imgs/ico_cadastro.png')}}>
                        <p class="text2">CADASTRE-SE <br>
                            <span style="color: yellow">E CONCORRA A PRÊMIOS</span>
                        </p>
                    </div>
                </a>
            </div>

            <div class="car">
                <a class="homeLink" href="../games">
                    <div class="textDiv">
                        <img class="ico" src={{asset('imgs/ico_game.png')}}>
                        <p class="text">GAMES</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="carClick">
        <a href="#">
            <div class="divClick">
                <p class="textClick">
                    <span style="font-weight: bold;">
                        CLICK AQUI
                    </span>
                    <br>
                    PARA MAIS INFORMAÇÕES
                </p>
            </div>
        </a>
    </div>

</body>

</html>