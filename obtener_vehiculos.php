
<?php

include_once "funciones.php";

$usuario = $_SESSION['usuario'];

$estaciones = obtenerVehiculosporUser($usuario);

// $estaciones = obtenerEESS();
echo json_encode($estaciones);
