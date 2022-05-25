
//Rellenar las variables
let   $ideess = "",
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
        $password = document.getElementById('password').value;



//#region Buscar el listado de EESS por municipios
///////////////////////////// Buscar el listado de EESS por municipios ////////////////////////////////

function buscarEESSporMunicipio(idMunicipio) {
    fetch('https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroMunicipio/'+idMunicipio)
    .then(resp => {
        console.log("Estado url : "+ resp.url+ "  status: "+resp.status+" type: "+resp.type);              
        return resp.json();
    })
    .then(json => {
        var ListaEstaciones = json;
        select = document.getElementById('selectEstacion');
        limpiarSelect(select);

        console.log(ListaEstaciones["ListaEESSPrecio"]);
        ListaEstaciones["ListaEESSPrecio"].forEach(e => {
            // console.log(e);
            id = e["IDEESS"];
            nombre = e["Rótulo"]+", "+e["Dirección"]+","+e["Provincia"];
            // console.log("Id: "+id+"    Nombre: "+nombre);

            var option = document.createElement("option");
            option.value = id;
            option.text = nombre;
            select.options.add(option);
        });
    })
    .catch(err => { console.log("ERROR :" + err) });
}
//#endregion

//#region Buscar el listado de EESS por municipios
///////////////////////////// Buscar el listado de EESS por municipios ////////////////////////////////

function guardarFavorito(idMunicipio, id) {

    fetch('https://sedeaplicaciones.minetur.gob.es/ServiciosRESTCarburantes/PreciosCarburantes/EstacionesTerrestres/FiltroMunicipio/'+idMunicipio)
    .then(resp => {
        console.log("Estado url : "+ resp.url+ "  status: "+resp.status+" type: "+resp.type);    
        return resp.json();
    })
    .then(json => {
        console.log(json);
        var lista = json["ListaEESSPrecio"];
        console.log(lista);

        lista.forEach(e => {
            // console.log(e);
            if(e["IDEESS"]==id){
                $ideess = parseInt(e["IDEESS"]);
                $IDMunicipio = parseInt(e["IDMunicipio"]);
                $IDProvincia = parseInt(e["IDProvincia"]);
                $IDCCAA = parseInt(e["IDCCAA"]);
                $CP = e["C.P."];
                $Direccion = e["Dirección"];
                $Horario = e["Horario"];
                $Latitud = parseFloat(e["Latitud"].replace(",", "."));
                $Longitud = parseFloat(e["Longitud (WGS84)"].replace(",", "."));
                $Localidad = e["Localidad"];
                $Margen = e["Margen"];
                $Municipio = e["Municipio"];
                $Precio_Biodiesel = parseFloat(e["Precio Biodiesel"].replace(",", "."));
                $Precio_Bioetanol = parseFloat(e["Precio Bioetanol"].replace(",", "."));
                $Precio_GNC = parseFloat(e["Precio Gas Natural Comprimido"].replace(",", "."));
                $Precio_GNL = parseFloat(e["Precio Gas Natural Licuado"].replace(",", "."));
                $Precio_GasesPetroleo = parseFloat(e["Precio Gases licuados del petróleo"].replace(",", "."));
                $Precio_GasoleoA = parseFloat(e["Precio Gasoleo A"].replace(",", "."));
                $Precio_GasoleoB = parseFloat(e["Precio Gasoleo B"].replace(",", "."));
                $Precio_GasoleoPremium = parseFloat(e["Precio Gasoleo Premium"].replace(",", "."));
                $Precio_Gasolina95E10 = parseFloat(e["Precio Gasolina 95 E10"].replace(",", "."));
                $Precio_Gasolina95E5 = parseFloat(e["Precio Gasolina 95 E5"].replace(",", "."));
                $Precio_Gasolina95E5Premium = parseFloat(e["Precio Gasolina 95 E5 Premium"].replace(",", "."));
                $Precio_Gasolina98E10 = parseFloat(e["Precio Gasolina 98 E10"].replace(",", "."));
                $Precio_Gasolina98E5 = parseFloat(e["Precio Gasolina 98 E5"].replace(",", "."));
                $Precio_Hidrogeno = parseFloat(e["Precio Hidrogeno"].replace(",", "."));
                $user = "user1";

                guardarFav();
                return;
            }
        });

    })
    .catch(err => { console.log("ERROR :" + err) });
}
//#endregion



async function guardarFav(){
    var 
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

    };
    const cargaUtilCodificada = JSON.stringify(cargaUtil);
    try {
        const respuestaRaw = await fetch("guardar_favorito.php", {
            method: "POST",
            body: cargaUtilCodificada,
        });
        console.log("Respuesta Cruda: "+respuestaRaw);
        const respuesta = await respuestaRaw.json();
        console.log("Respuesta : "+respuesta);
        if (respuesta) {
            // alert("Favorito guardado");
        } else {
            alert("El servidor no envió una respuesta exitosa");
        }
    } catch (e) {
        // En caso de que haya un error
        alert("Error de servidor. Inténtalo de nuevo. El error es: " + e);
    }
    obtenerEESS();
};