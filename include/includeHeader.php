<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - MJ</title>
    <!--CSS perso-->
    <link rel="stylesheet" type="text/css" href="/style/style.css">
    <!--CSS perso-->
    <!-- <script src="jsquery.min.js"></script> -->
    <!-- CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CDN Icone mail + Git -->
    <link rel="stylesheet" href="https://unpkg.com/jam-icons/css/jam.min.css">
    <!-- CDN DevIcon -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

</head>

<body>
    <div class="maNavBar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="d-flex flex-grow-1">
                <span class="w-100 d-lg-none d-block"><!-- hidden spacer to center brand on mobile --></span>
                <a class="navbar-brand" href="/accueil.php">
                    <h2> Portfolio | Maxim Joseau </h2>
                </a>
                <div class="w-100 text-right">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
                <ul class="navbar-nav ml-auto flex-nowrap">
                    <li class="nav-item">
                        <a href="/fluxRSS/Mainflux.php" class="nav-link">Flux RSS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Stages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/stages/stage1.php">Stage première année</a>
                        <a class="dropdown-item" href="/stages/stage2.php">Stage deuxième année</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/cv/cv.php" class="nav-link">Curriculum Vitæ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Veilles Technologiques
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/veille/veille1.php">Réseaux de Téléphonie Mobile</a>
                        <a class="dropdown-item" href="/veille/veille2.php">Le Cloud</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/pdc/PDC.php" class="nav-link">Portefeuille de compétences</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="contenu">
        <!--Contenu général de la page-->