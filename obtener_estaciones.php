
<?php
include_once "funciones.php";
$estaciones = obtenerEESS();
echo json_encode($estaciones);
