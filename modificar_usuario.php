<?php

include('funciones.php');

$usuar=$_SESSION['usuario'];
$passw=$_GET['modifi_pass'];
$pass = password_hash($passw, PASSWORD_DEFAULT);
$pass2=$_GET['modifi_pass2'];
$nombre=$_GET['modifi_nombre'];
$apellidos=$_GET['modifi_apellidos'];
$email=$_GET['modifi_email'];
$tipo_combustible=$_GET['modifi_tipo_combustible'];
$deposito=$_GET['modifi_deposito'];
$localidad=$_GET['modifi_localidad'];
$codigo_postal=$_GET['modifi_codigo_postal'];

if($passw != $pass2){
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    echo '<script>window.location.href = "./modificarDatos.php";</script>';
}else{
    $var = modificarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal);
    $respuesta = modificarPass($usuar, $pass);
    echo '<script>window.location.href = "./index.php";</script>';
}

// echo json_encode($var);
// echo '<script>window.location.href = "./index.php";</script>';

?>
