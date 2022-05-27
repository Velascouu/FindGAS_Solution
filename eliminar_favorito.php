

<?php
if (!isset($_GET["id"])) {
    http_response_code(500);
    exit();
}

include_once "funciones.php";

$usuario = $_SESSION['usuario'];


$respuesta = eliminarEESS($_GET["id"], $usuario);
echo json_encode($respuesta);
