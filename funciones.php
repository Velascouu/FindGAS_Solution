

<?php

function obtenerProductoPorIDEESS($ideess)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT * FROM eess WHERE ideess = ?");
    $sentencia->execute([$ideess]);
    return $sentencia->fetchObject();
}

function obtenerUser($usuario, $password)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("SELECT * FROM eess WHERE 'user' = ? AND 'password' = ?");
    $sentencia->execute([$usuario, $password]);
    return $sentencia->fetchObject();
}

function obtenerEESS()
{
    $bd = obtenerConexion();
    $sentencia = $bd->query("SELECT * FROM eess");
    return $sentencia->fetchAll();
}

function eliminarEESS($ideess)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("DELETE FROM eess WHERE ideess = ?");
    return $sentencia->execute([$ideess]);
}

function guardarProducto($ideess, $IDMunicipio, $IDProvincia, $IDCCAA, $CP, $Direccion, $Horario, $Latitud, $Longitud, $Localidad, $Margen, $Municipio, $Precio_Biodiesel, $Precio_Bioetanol, $Precio_GNC, $Precio_GNL, $Precio_GasesPetroleo, $Precio_GasoleoA, $Precio_GasoleoB, $Precio_GasoleoPremium, $Precio_Gasolina95E10, $Precio_Gasolina95E5, $Precio_Gasolina95E5Premium, $Precio_Gasolina98E10, $Precio_Gasolina98E5, $Precio_Hidrogeno, $user)
{
    $bd = obtenerConexion();
    $sentencia = $bd->prepare("INSERT INTO eess(nombre, precio, descripcion) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    return $sentencia->execute([$ideess, $IDMunicipio, $IDProvincia, $IDCCAA, $CP, $Direccion, $Horario, $Latitud, $Longitud, $Localidad, $Margen, $Municipio, $Precio_Biodiesel, $Precio_Bioetanol, $Precio_GNC, $Precio_GNL, $Precio_GasesPetroleo, $Precio_GasoleoA, $Precio_GasoleoB, $Precio_GasoleoPremium, $Precio_Gasolina95E10, $Precio_Gasolina95E5, $Precio_Gasolina95E5Premium, $Precio_Gasolina98E10, $Precio_Gasolina98E5, $Precio_Hidrogeno, $user]);
}

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}
function obtenerConexion()
{
    $password = obtenerVariableDelEntorno("MYSQL_PASSWORD");
    $user = obtenerVariableDelEntorno("MYSQL_USER");
    $dbName = obtenerVariableDelEntorno("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
