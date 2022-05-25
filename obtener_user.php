<?php
include_once "funciones.php";
$var = obtenerUser($usuario, $password);
echo json_encode($var);