<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <link href="{{asset('css/menu.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-transparent">
        <a class="navbar-brand" href="#">
            <img src={{asset('imgs/ico_grade_nav.png')}} alt="" class="brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse text-right" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../home">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../registers/create">CADASTRE-SE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../games">GAMES</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>