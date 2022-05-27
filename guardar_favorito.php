
<?php
session_start();

$cargaUtil = json_decode(file_get_contents("php://input"));
// Si no hay datos, salir inmediatamente indicando un error 500
if (!$cargaUtil) {
    http_response_code(500);
    exit;
}
// Extraer valores
$ideess = $cargaUtil->ideess;
$IDMunicipio = $cargaUtil->IDMunicipio;
$IDProvincia = $cargaUtil->IDProvincia;
$IDCCAA = $cargaUtil->IDCCAA;
$CP = $cargaUtil->CP;
$Direccion = $cargaUtil->Direccion;
$Horario = $cargaUtil->Horario;
$Latitud = $cargaUtil->Latitud;
$Longitud = $cargaUtil->Longitud;
$Localidad = $cargaUtil->Localidad;
$Margen = $cargaUtil->Margen;
$Municipio = $cargaUtil->Municipio;
$Precio_Biodiesel = $cargaUtil->Precio_Biodiesel;
$Precio_Bioetanol = $cargaUtil->Precio_Bioetanol;
$Precio_GNC = $cargaUtil->Precio_GNC;
$Precio_GNL = $cargaUtil->Precio_GNL;
$Precio_GasesPetroleo = $cargaUtil->Precio_GasesPetroleo;
$Precio_GasoleoA = $cargaUtil->Precio_GasoleoA;
$Precio_GasoleoB = $cargaUtil->Precio_GasoleoB;
$Precio_GasoleoPremium = $cargaUtil->Precio_GasoleoPremium;
$Precio_Gasolina95E10 = $cargaUtil->Precio_Gasolina95E10;
$Precio_Gasolina95E5 = $cargaUtil->Precio_Gasolina95E5;
$Precio_Gasolina95E5Premium = $cargaUtil->Precio_Gasolina95E5Premium;
$Precio_Gasolina98E10 = $cargaUtil->Precio_Gasolina98E10;
$Precio_Gasolina98E5 = $cargaUtil->Precio_Gasolina98E5;
$Precio_Hidrogeno = $cargaUtil->Precio_Hidrogeno;
$user = $_SESSION["usuario"];


include_once "funciones.php";
$respuesta = guardarProducto($ideess, $IDMunicipio, $IDProvincia, $IDCCAA, $CP, $Direccion, $Horario, $Latitud, $Longitud, $Localidad, $Margen, $Municipio, $Precio_Biodiesel, $Precio_Bioetanol, $Precio_GNC, $Precio_GNL, $Precio_GasesPetroleo, $Precio_GasoleoA, $Precio_GasoleoB, $Precio_GasoleoPremium, $Precio_Gasolina95E10, $Precio_Gasolina95E5, $Precio_Gasolina95E5Premium, $Precio_Gasolina98E10, $Precio_Gasolina98E5, $Precio_Hidrogeno, $user);
// Devolver al cliente la respuesta de la función
echo json_encode($respuesta);
