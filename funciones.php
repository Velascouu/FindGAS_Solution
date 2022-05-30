

<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');

if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
}



// function obtenerUser($usuario, $password)
// {
//     $bd = obtenerConexion();
//     $sql="SELECT * FROM passwords WHERE usuario = '".$usuario."' AND passwrd = '".$password."'";

//     $resultado = mysqli_query($bd, $sql); 
//     while ($row = mysqli_fetch_assoc($resultado)) {
//         $output[] = $row;
//     }
//     return $output;
// }

function obtenerUser($usuario, $password)
{
    $bd = obtenerConexion();
    $sql="SELECT * FROM passwords WHERE usuario = '".$usuario."' AND passwrd = '".$password."'";

    $resultado = mysqli_query($bd, $sql); 
    while ($row = mysqli_fetch_assoc($resultado)) {
        $output[] = $row;
    }
    return $output;
}

function obtenerEESS()
{
    $bd = obtenerConexion();
    $sql="SELECT * FROM eess";

    $resultado = mysqli_query($bd, $sql); 
    while ($row = mysqli_fetch_assoc($resultado)) {
        $output[] = $row;
    }
    return $output;

}

function obtenerEESSporUser($usuario)
{
    $bd = obtenerConexion();
    $sql="SELECT * FROM eess WHERE usuario = '".$usuario."'";

    $resultado = mysqli_query($bd, $sql); 
    while ($row = mysqli_fetch_array($resultado)) {
        $output[] = $row;
    }
    return $output;
}

function obtenerDatosUser($usuario)
{
    $bd = obtenerConexion();
    $sql="SELECT * FROM users WHERE usuario = '".$usuario."'";

    $resultado = mysqli_query($bd, $sql); 
    while ($row = mysqli_fetch_object($resultado)) {
        
    }
    return $row;
}

function eliminarEESS($ideess, $usuario)
{
    $bd = obtenerConexion();
    $sql = "DELETE FROM eess WHERE ideess = '".$ideess."' AND usuario = '".$usuario."'";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function guardarProducto($ideess, $IDMunicipio, $IDProvincia, $IDCCAA, $CP, $Direccion, $Horario, $Latitud, $Longitud, $Localidad, $Margen, $Municipio, $Precio_Biodiesel, $Precio_Bioetanol, $Precio_GNC, $Precio_GNL, $Precio_GasesPetroleo, $Precio_GasoleoA, $Precio_GasoleoB, $Precio_GasoleoPremium, $Precio_Gasolina95E10, $Precio_Gasolina95E5, $Precio_Gasolina95E5Premium, $Precio_Gasolina98E10, $Precio_Gasolina98E5, $Precio_Hidrogeno, $user)
{
    $bd = obtenerConexion();
    $sql ="INSERT INTO `eess`(`ideess`, `id_municipio`, `id_provincia`, `id_ccaa`, `cp`, `direccion`, `horario`, `latitud`, `longitud`, `localidad`, `margen`, `municipio`, `precio_biodiesel`, `precio_bioetanol`, `precio_gnc`, `precio_gnl`, `precio_gaspetr`, `precio_gasoleo_a`, `precio_gasoleo_b`, `precio_gasoleopremium`, `precio_gasolina95e10`, `Precio_Gasolina95E5`, `Precio_Gasolina95E5Premium`, `Precio_Gasolina98E10`, `Precio_Gasolina98E5`, `Precio_Hidrogeno`, `usuario`) VALUES ('".$ideess."', '".$IDMunicipio."', '".$IDProvincia."', '".$IDCCAA."', '".$CP."', '".$Direccion."', '".$Horario."', '".$Latitud."', '".$Longitud."', '".$Localidad."', '".$Margen."', '".$Municipio."', '".$Precio_Biodiesel."', '".$Precio_Bioetanol."', '".$Precio_GNC."', '".$Precio_GNL."', '".$Precio_GasesPetroleo."', '".$Precio_GasoleoA."', '".$Precio_GasoleoB."', '".$Precio_GasoleoPremium."', '".$Precio_Gasolina95E10."', '".$Precio_Gasolina95E5."', '".$Precio_Gasolina95E5Premium."', '".$Precio_Gasolina98E10."', '".$Precio_Gasolina98E5."', '".$Precio_Hidrogeno."', '".$user."');";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}


function guardarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal)
{
    $bd = obtenerConexion();
    $sql ="INSERT INTO `users`(`usuario`, `nombre`, `apellidos`, `email`, `tipo_combustible`, `deposito`, `localidad`, `codigo_postal`) VALUES ('".$usuar."', '".$nombre."', '".$apellidos."', '".$email."', '".$tipo_combustible."', '".$deposito."', '".$localidad."', '".$codigo_postal."');";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function obtenerVehiculosporUser($usuario)
{
    $bd = obtenerConexion();
    $sql="SELECT * FROM vehiculos WHERE usuario = '".$usuario."'";

    $resultado = mysqli_query($bd, $sql); 
    while ($row = mysqli_fetch_assoc($resultado)) {
        $output[] = $row;
    }
    return $output;
}

function guardarVehiculo($matricula, $marca, $modelo, $combustible, $deposito, $user)
{
    $bd = obtenerConexion();
    $sql ="INSERT INTO `vehiculos`(`matricula`, `marca`, `modelo`, `combustible`, `deposito`, `usuario`) VALUES ('".$matricula."','".$marca."','".$modelo."','".$combustible."','".$deposito."','".$user."');";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function modificarVehiculo($matricula, $marca, $modelo, $combustible, $deposito, $user)
{
    $bd = obtenerConexion();
    $sql ="UPDATE `vehiculos` SET `marca`='".$marca."',`modelo`='".$modelo."',`combustible`='".$combustible."',`deposito`='".$deposito."' WHERE `usuario`='".$user."' AND `matricula`='".$matricula."';";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function eliminarVehiculo($matricula, $user)
{
    $bd = obtenerConexion();
    $sql = "DELETE FROM vehiculos WHERE matricula = '".$matricula."' AND usuario = '".$user."'";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function guardarPass($usuar, $pass)
{
    $bd = obtenerConexion();
    $sql ="INSERT INTO `passwords`(`usuario`, `passwrd`) VALUES ('".$usuar."','".$pass."');";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function modificarUser($usuar, $nombre, $apellidos, $email, $tipo_combustible, $deposito, $localidad, $codigo_postal)
{
    $bd = obtenerConexion();
    $sql ="UPDATE `users` SET `nombre`='".$nombre."',`apellidos`='".$apellidos."',`email`='".$email."',`tipo_combustible`='".$tipo_combustible."',`deposito`='".$deposito."',`localidad`='".$localidad."',`codigo_postal`='".$codigo_postal."' WHERE `usuario`='".$usuar."';";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function modificarPass($usuar, $pass)
{
    $bd = obtenerConexion();
    $sql ="UPDATE `passwords` SET `passwrd`='".$pass."' WHERE `usuario`='".$usuar."';";
    $resultado = mysqli_query($bd, $sql);
    return $resultado;
}

function obtenerConexion()
{
    // $passwordDB = obtenerVariableDelEntorno("MYSQL_PASSWORD");
    $passwordDB = "";
    $host_name = "localhost";
    // $user = obtenerVariableDelEntorno("MYSQL_USER");
    $user = "root";
    // $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
    $dbName = "findgas";
    $bd = mysqli_connect($host_name, $user, $passwordDB, $dbName);
    if(mysqli_connect_errno()) {
		echo '<p>"Error: Fallo al conectarse a MySQL debido a: '.mysqli_connect_error().'</p>';
    }
    return $bd;
}


// function obtenerConexion()
// {
//     // $passwordDB = obtenerVariableDelEntorno("MYSQL_PASSWORD");
//     $passwordDB = "arandalermapalenciazamora2009";
//     $host_name = "localhost";
//     // $user = obtenerVariableDelEntorno("MYSQL_USER");
//     $user = "s022045b";
//     // $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
//     $dbName = "s022045b_Velasco_Diego_2122";
//     $bd = mysqli_connect($host_name, $user, $passwordDB, $dbName);
//     if(mysqli_connect_errno()) {
// 		echo '<p>"Error: Fallo al conectarse a MySQL debido a: '.mysqli_connect_error().'</p>';
//     }
//     return $bd;
// }
