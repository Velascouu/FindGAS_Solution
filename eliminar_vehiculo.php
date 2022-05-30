<?php
if (!isset($_GET["matr"])) {
    http_response_code(500);
    exit();
}

include_once "funciones.php";

$user = $_SESSION['usuario'];


$respuesta = eliminarVehiculo($_GET["matr"], $user);
echo json_encode($respuesta);
