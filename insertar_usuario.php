
<?php

include('funciones.php');

$usuar=$_POST['usuar'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
// $pass = password_hash($passw, PASSWORD_DEFAULT);
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$tipo_combustible=$_POST['tipo_combustible'];
$deposito=$_POST['deposito'];
$localidad=$_POST['localidad'];
$codigo_postal=$_POST['codigo_postal'];

if($pass != $pass2){
    echo '<script>alert("Las contraseñas no coinciden");</script>';
    echo '<script>window.location.href = "./registro.php";</script>';
}else{
    $var = guardarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal);
    $respuesta = guardarPass($usuar, $pass);
    echo '<script>window.location.href = "./index.php";</script>';
}


// $var = guardarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal);

// $respuesta = guardarPass($usuar, $pass);

// echo json_encode($var);
// echo '<script>window.location.href = "./index.php";</script>';

?>
