

//Rellenar las variables
const   $ideess = "",
        $IDMunicipio = "",
        $IDProvincia = "",
        $IDCCAA = "",
        $CP = "",
        $Direccion = "",
        $Horario = "",
        $Latitud = "",
        $Longitud = "",
        $Localidad = "",
        $Margen = "",
        $Municipio = "",
        $Precio_Biodiesel = "",
        $Precio_Bioetanol = "",
        $Precio_GNC = "",
        $Precio_GNL = "",
        $Precio_GasesPetroleo = "",
        $Precio_GasoleoA = "",
        $Precio_GasoleoB = "",
        $Precio_GasoleoPremium = "",
        $Precio_Gasolina95E10 = "",
        $Precio_Gasolina95E5 = "",
        $Precio_Gasolina95E5Premium = "",
        $Precio_Gasolina98E10 = "",
        $Precio_Gasolina98E5 = "",
        $Precio_Hidrogeno = "",
        $user = "",
        $usuario = document.getElementById('user').value,
        $password = documentt.getElementById('password').value;



$btnGuardar.onclick = async () => {
    const 
        ideess = $ideess,
        IDMunicipio = $IDMunicipio,
        IDProvincia = $IDProvincia,
        IDCCAA = $IDCCAA,
        CP = $CP,
        Direccion = $Direccion,
        Horario = $Horario,
        Latitud = $Latitud,
        Longitud = $Longitud,
        Localidad = $Localidad,
        Margen = $Margen,
        Municipio = $Municipio,
        Precio_Biodiesel = $Precio_Biodiesel,
        Precio_Bioetanol = $Precio_Bioetanol,
        Precio_GNC = $Precio_GNC,
        Precio_GNL = $Precio_GNL,
        Precio_GasesPetroleo = $Precio_GasesPetroleo,
        Precio_GasoleoA = $Precio_GasoleoA,
        Precio_GasoleoB = $Precio_GasoleoB,
        Precio_GasoleoPremium = $Precio_GasoleoPremium,
        Precio_Gasolina95E10 = $Precio_Gasolina95E10,
        Precio_Gasolina95E5 = $Precio_Gasolina95E5,
        Precio_Gasolina95E5Premium = $Precio_Gasolina95E5Premium,
        Precio_Gasolina98E10 = $Precio_Gasolina98E10,
        Precio_Gasolina98E5 = $Precio_Gasolina98E5,
        Precio_Hidrogeno = $Precio_Hidrogeno,
        user = $user;
    
    // Lo que vamos a enviar a PHP
    const cargaUtil = {

        ideess,
        IDMunicipio,
        IDProvincia,
        IDCCAA,
        CP,
        Direccion,
        Horario,
        Latitud,
        Longitud,
        Localidad,
        Margen,
        Municipio,
        Precio_Biodiesel,
        Precio_Bioetanol,
        Precio_GNC,
        Precio_GNL,
        Precio_GasesPetroleo,
        Precio_GasoleoA,
        Precio_GasoleoB,
        Precio_GasoleoPremium,
        Precio_Gasolina95E10,
        Precio_Gasolina95E5,
        Precio_Gasolina95E5Premium,
        Precio_Gasolina98E10,
        Precio_Gasolina98E5,
        Precio_Hidrogeno,
        user,

        // Nota: podríamos hacerlo más simple, y escribir:
        // nombre,
        // En lugar de:
        // nombre: nombre
        // Pero eso podría confundir al principiante
    };
    // Codificamos...
    const cargaUtilCodificada = JSON.stringify(cargaUtil);
    // Enviamos
    try {
        const respuestaRaw = await fetch("guardar_favorito.php", {
            method: "POST",
            body: cargaUtilCodificada,
        });
        // El servidor nos responderá con JSON
        const respuesta = await respuestaRaw.json();
        if (respuesta) {

            // Y si llegamos hasta aquí, todo ha ido bien
            alert("Favorito guardado");
            
        } else {
            alert("El servidor no envió una respuesta exitosa");
        }
    } catch (e) {
        // En caso de que haya un error

        alert("Error de servidor. Inténtalo de nuevo. El error es: " + e);
        
    }
};