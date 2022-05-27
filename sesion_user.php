<?php 


if(!isset($_SESSION['usuario'])){
    
    echo '<li class="nav-item" style="margin: 5px;">';
        echo '<a class="btn btn-primary" href="./registro.php" role="button">Registrarse</a>';
    echo '</li>';
    echo '<li class="nav-item" style="margin: 5px;">';
        echo '<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">Iniciar sesión</button>';
    echo '</li>';


}else{
    echo '<script>console.log("'.$_SESSION['usuario'].'")</script>';
    echo '<li class="nav-item" style="margin: 5px;">';
        echo '<div class="dropdown">';
            echo '<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Usuario</button>';
            echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">';
                echo '<li><a class="dropdown-item" href="modificarDatos.php">Modificar tus datos</a></li>';
                echo '<li><a class="dropdown-item" href="listadoFav.php">Descargar fichero de EESS</a></li>';
                echo '<li><a class="dropdown-item" href="./cerrar_session.php">Cerrar sesion</a></li>';
            echo '</ul>';
        echo '</div>';
    echo '</li>';
}





?>