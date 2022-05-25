
<?php
if (!isset($_GET["user"])) {
    http_response_code(500);
    exit();
}
include_once "funciones.php";
$producto = obtenerEstacionesPorUser($_GET["user"]);
echo json_encode($producto);