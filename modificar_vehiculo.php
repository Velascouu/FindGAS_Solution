<?php
include_once "funciones.php";

$cargaUtil = json_decode(file_get_contents("php://input"));
// Si no hay datos, salir inmediatamente indicando un error 500
if (!$cargaUtil) {
    http_response_code(500);
    exit;
}
// Extraer valores
$matricula = $cargaUtil->matricula;
$marca = $cargaUtil->marca;
$modelo = $cargaUtil->modelo;
$combustible = $cargaUtil->combustible;
$deposito = $cargaUtil->deposito;
$user = $_SESSION['usuario'];


$respuesta = modificarVehiculo($matricula, $marca, $modelo, $combustible, $deposito, $user);
// Devolver al cliente la respuesta de la función
echo json_encode($respuesta);

