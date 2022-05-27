<?php
// session_start();

include_once "funciones.php";

obtenerConexion();

$usuario = $_GET['user'];
$passwrd = $_GET['pass'];
$password = password_hash($passwrd, PASSWORD_DEFAULT);

// obtenerUser($_GET['user'], $_GET['pass']);

$var = obtenerUser($usuario);

// // echo '<script>console.log('.$var.')</script>';
// echo '<script>console.log('.json_encode($var).')</script>';
// $respuesta = json_encode($var);
// // echo '<script>console.log('.$respuesta['passwrd'].')</script>';


// echo '<script>console.log('.strlen($respuesta).');</script>';
// $num1 = strlen($respuesta);

// echo '<script>console.log('.strpos($respuesta, "passwrd").');</script>';
// $num2 = strpos($respuesta, "passwrd");
// // echo '<script>console.log('.strrpos($respuesta, "BHF").');</script>';

// echo '<script>console.log('.substr($respuesta, 21).');</script>';
// // echo '<script>console.log('.substr($respuesta, ($num2+9), ($num1-$num2-2)).');</script>';
// // strpos($respuesta, "passwrd: '")




if($var == false){
    // echo '<script>alert("Usuario o contraseña incorrectos.")</script>';
    echo '<script>window.location.href = "./favoritos.php";</script>';
}else{
    $respuesta = json_encode($var);
    // if(password_verify($password, $respuesta)){
        $_SESSION['usuario'] = $usuario;
        echo '<script>window.location.href = "./favoritos.php";</script>';
    // }
}

// $respuesta = json_encode($var);
// echo '<script>console.log('.$respuesta.')</script>';


// echo json_encode($var);
// echo '<script>window.location.href = "./favoritos.php";</script>';