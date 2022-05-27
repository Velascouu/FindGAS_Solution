
<?php

include('funciones.php');

$usuar=$_GET['usuar'];
$passw=$_GET['pass'];
$pass = password_hash($passw, PASSWORD_DEFAULT);
$nombre=$_GET['nombre'];
$apellidos=$_GET['apellidos'];
$email=$_GET['email'];
$tipo_combustible=$_GET['tipo_combustible'];
$deposito=$_GET['deposito'];
$localidad=$_GET['localidad'];
$codigo_postal=$_GET['codigo_postal'];

if($passw != $pass2){
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    echo '<script>window.location.href = "./modificarDatos.php";</script>';
}else{
    $var = guardarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal);
    $respuesta = guardarPass($usuar, $pass);
    echo '<script>window.location.href = "./registro.php";</script>';
}


// $var = guardarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal);

// $respuesta = guardarPass($usuar, $pass);

// echo json_encode($var);
// echo '<script>window.location.href = "./index.php";</script>';

?>
