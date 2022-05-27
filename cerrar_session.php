<?php 
session_start();
// echo '<script>console.log('.$_SESSION["usuario"].');</script>';
unset($_SESSION['usuario']);
// echo '<script>console.log('.$_SESSION["usuario"].');</script>';
session_destroy();
echo '<script>window.location.href = "./index.php";</script>';

?>