
<?php

include_once "funciones.php";
$usuario = $_SESSION['usuario'];

$datos = obtenerDatosUser($usuario);
echo json_encode($datos);