<?php
include_once "funciones.php";
$var = obtenerUser($usuario);
echo json_encode($var);