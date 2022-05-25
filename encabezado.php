<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindGAS</title>
    <link rel="icon" href="./assets/img/FindGAS_icono_modified.png">
    <!-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <header></header>
    <main>
<!-- ///////////////////////////////////////////////////// Barra de navegación /////////////////////////////////////////////////////////////// -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark" id="navegadorHeader">
            <div class="container-fluid" id="navegador">
                <!-- <a class="nav-link" href="#"><img src="./assets/logo.png" id="logoHeader"></a> -->
                <a class="navbar-brand"><img src="./assets/img/FindGAS_icono_horizontal.png" style="height: 8vh; border-radius: 4vh;"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php"><h2>Inicio</h2></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./map.php"><h2>Mapa</h2></a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active" href="./buscador.html"><h2>Buscador</h2></a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link active" href="./favoritos.php"><h2><b2>Favoritos</b2></h2></a>
                        </li>
                    </ul>
                </div>
                <div id="navegadorInicio"  style="margin-right: 5vw;">
                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item" style="margin: 5px;">
                            <a class="btn btn-primary" href="./registro.php" role="button">Registrarse</a>
                        </li>
                        <li class="nav-item" style="margin: 5px;">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">Iniciar sesión</button>
                        </li>
                        </ul>
                </div>
            </div>
        </nav>
        
<!-- ////////////////////////////////////////////////////////////// Fin /////////////////////////////////////////////////////////////////////// -->
