
var getPosition = false;
var currentLat = null;
var currentLong = null;

inicioMap();
funcionInit();

//#region Carga el mapa de GOOGLE MAPS
///////////////////////////// CARGA DEL MAPA DE GOOGLE MAPS ////////////////////////////////
function inicioMap(){
    // console.log("Latitud: "+lat+"   Longitud: "+long);

    mapEle = document.getElementById('map_canvas');
    destination = {lat: 40.4163403, lng: -3.70343861982586};

    lat = 40.4163403;
    lng = -3.70343861982586;

    if(this.currentLat != null){
        lat = this.currentLat;
    }
    if(this.currentLong != null){
        lng = this.currentLong;
    }

    map = new google.maps.Map(
        mapEle, {
        center: new google.maps.LatLng(lat, lng),//latitud,longitud),//
        zoom: 6, // zoom del mapa
        draggableCursor: 'auto', // forma del cursor
        draggingCursor: 'crosshair',
        mapTypeId: google.maps.MapTypeId.ROADMAP // tipo de mapa
        });
}
////////////////////////////////////////////////////////////////////////////////////////////
//#endregion

//#region Pedir Ubicacion del dispositivo
///////////////////////////// PEDIMOS UBICACION DEL DISPOSITIVO ////////////////////////////////
function funcionInit() {
    if(!getPosition){
        if (!"geolocation" in navigator) {
            return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
        }
    
        const onUbicacionConcedida = ubicacion => {
            console.log("Tengo la ubicación: ", ubicacion);
            const coordenadas = ubicacion.coords;
            this.currentLat = coordenadas.latitude;
            this.currentLong = coordenadas.longitude;
            // console.log("Latitud: "+currentLat+"  Longitud: "+currentLong );
            this.getPosition = true;
            // console.log(getPosition);
            centrarMapa(map, currentLat, currentLong);
            zoomMapa(12);
            ponerMarcador(currentLat, currentLong, "Ubicacion actual");
        }
      
        const onErrorDeUbicacion = err => {
            console.log("Error obteniendo ubicación: ", err);
        }
    
        const opcionesDeSolicitud = {
            enableHighAccuracy: true, // Alta precisión
            maximumAge: 0, // No queremos caché
            timeout: 5000 // Esperar solo 5 segundos
        };
        // Solicitar
        navigator.geolocation.getCurrentPosition(onUbicacionConcedida, onErrorDeUbicacion, opcionesDeSolicitud);
    }
}
/////////////////////////////////////////////////////////////////////////////////////////////
//#endregion

//#region Cambiar el centro del MAPA
///////////////////////////// CENTRAR EL MAPA ////////////////////////////////
function centrarMapa(map, latitud, longitud){
    map.setCenter(new google.maps.LatLng(latitud, longitud));
}

//////////////////////////////////////////////////////////////////////////////
//#endregion

//#region Cambiar el zoom del MAPA
///////////////////////////// CENTRAR EL MAPA ////////////////////////////////
function zoomMapa(num){
    map.setZoom(num);
}

//////////////////////////////////////////////////////////////////////////////
//#endregion

//#region Centrar en un municipio solicitado
function centrarenMunicipio(ccaa, provincia, municipio) {
    
}
//#endregion

//#region Centrar en una CCAA solicitada
function centrarCCAA(ccaa) {
    switch (ccaa) {
        case '01':
            //Andalucía
            var lat = 37.4572112;
            var long = -4.6920801;
            centrarMapa(map, lat, long);
            zoomMapa(7);
            break;
        case '02':
            //Aragon
            var lat = 41.4326023;
            var long = -0.7171092;
            centrarMapa(map, lat, long);
            zoomMapa(7.5);
            break;
        case '03':
            //Asturias
            var lat = 43.3203297;
            var long = -5.8571245;
            centrarMapa(map, lat, long);
            zoomMapa(9);
            break;
        case '04':
            //Baleares
            var lat = 39.4070001;
            var long = 2.6717389;
            centrarMapa(map, lat, long);
            zoomMapa(8);
            break;
        case '05':
            //Canarias
            var lat = 28.3664206;
            var long = -15.8045477;
            centrarMapa(map, lat, long);
            zoomMapa(8);
            break;
        case '06':
            //Cantabria
            var lat = 43.2753724;
            var long = -3.9808392;
            centrarMapa(map, lat, long);
            zoomMapa(9);
            break;
        case '07':
            //Castilla La Mancha
            var lat = 39.7841592;
            var long = -3.9093488;
            centrarMapa(map, lat, long);
            zoomMapa(7.5);
            break;
        case '08':
            //Castilla y León
            var lat = 41.6591945;
            var long = -4.9912108;
            centrarMapa(map, lat, long);
            zoomMapa(7.5);
            break;
        case '09':
            //Cataluña
            var lat = 41.4613773;
            var long = 1.7242689;
            centrarMapa(map, lat, long);
            zoomMapa(8);
            break;
        case '10':
            //Comunidad Valenciana
            var lat = 39.3886872;
            var long = -0.0726353;
            centrarMapa(map, lat, long);
            zoomMapa(7.5);
            break;
        case '11':
            //Extremadura
            var lat = 39.2775256;
            var long = -6.3068622;
            centrarMapa(map, lat, long);
            zoomMapa(7.5);
            break;
        case '12':
            //Galicia
            var lat = 42.8535082;
            var long = -8.1427124;
            centrarMapa(map, lat, long);
            zoomMapa(8);
            break;
        case '13':
            //Madrid
            var lat = 40.5227728;
            var long = -3.8058464;
            centrarMapa(map, lat, long);
            zoomMapa(8.5);
            break;
        case '14':
            //Murcia
            var lat = 38.0845034;
            var long = -1.3207856;
            centrarMapa(map, lat, long);
            zoomMapa(8.5);
            break;
        case '15':
            //Navarra
            var lat = 42.6052046;
            var long = -1.8102457;
            centrarMapa(map, lat, long);
            zoomMapa(8.5);
            break;
        case '16':
            //Pais Vasco
            var lat = 42.9684193;
            var long = -2.6225973;
            centrarMapa(map, lat, long);
            zoomMapa(9);
            break;
        case '17':
            //La Rioja
            var lat = 42.2946803;
            var long = -2.493671;
            centrarMapa(map, lat, long);
            zoomMapa(9.5);
            break;
        case '18':
            //Ceuta
            var lat = 35.893845;
            var long = -5.3362573;
            centrarMapa(map, lat, long);
            zoomMapa(12);
            break;
        case '19':
            //Melilla
            var lat = 35.2938006;
            var long = -2.9452856;
            centrarMapa(map, lat, long);
            zoomMapa(12);
            break;
    
        default:
            console.log("No ha recibido la CCAA");
            break;
    }
}
//#endregion

//#region ponerMarcador
function ponerMarcador(lat, long, txt) {
    var marker = new google.maps.Marker({
        position: {lat: lat, lng: long},
        // icon: url("https://pegaso.h3m.com:2083/cpsess2639202532/viewer/home%2fs022045b%2fpublic_html%2fcurso21_22%2fVelasco_Diego_2122%2fassets%2fimg/ubiBlue.png"),
        map: map,
        title: txt
    });
}
//#endregion

//#region ponerMarcadores
function ponerMarcadores() {
    this.markers = new google.maps.Marker();
}
//#endregion

//#region Fuciones a desarrollar.............................
function hacerRuta(){
    var origen = document.getElementById("cOrigen").value
    var destino = document.getElementById("cDestino").value
    var request = {
            origin:origen,
            destination:destino,
            travelMode: google.maps.TravelMode.DRIVING
        };
        alert(origen)
        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();
        // Indicamos dónde esta el mapa para renderizarnos
        directionsDisplay.setMap(map);
        // Indicamos dónde esta el panel para mostrar el texto
        directionsDisplay.setPanel(document.getElementById("pano"));
        directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(result);
            }
        });

}

function centrarMunicipio(){
    var  geocoder = new google.maps.Geocoder();
    var municipio = document.getElementById("selectMunicipio").textContent;
    var provincia = document.getElementById("selectProvincia").textContent;
    var ccaa = document.getElementById("selectCCAA").textContent;
    console.log(document.getElementById("selectMunicipio").textContent);

    console.log(municipio);

    geocoder.geocode( { 'address': municipio+", "+provincia+", "+ccaa+"España"}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {

            console.log(results[0].geometry.location);
            map.setCenter(results[0].geometry.location);
            zoomMapa(12);
            // var marker = new google.maps.Marker({
            //     map: map,
            //     icon:"buscar.png",
            //     position: results[0].geometry.location
            // });
        } else {
            alert('Geocode no ha podido localizar la dirección por este motivo: ' + status);
        }  
    });
}
//#endregion