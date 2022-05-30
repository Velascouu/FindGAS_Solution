
const $cuerpoTabla = document.querySelector("#tablaFavoritos");
const $crpTabla = document.querySelector("#tablaVehiculos");

//#region Obtener las estaciones de servicio favoritas de cada usuario
const obtenerEESS = async () => {
    // Es una petición GET, no necesitamos indicar el método ni el cuerpo
    const respuestaRaw = await fetch("obtener_estaciones.php");
    const estaciones = await respuestaRaw.json();
    
    // console.log(respuestaRaw);
    // console.log(estaciones);

    dibujarEstaciones(estaciones);

};

// Y cuando se incluya este script, invocamos a la función
obtenerEESS();
//#endregion

//#region Dibujar las estaciones
function dibujarEstaciones(estaciones) {
        // Limpiamos la tabla
        $cuerpoTabla.innerHTML = "";
        // Ahora ya tenemos a los estaciones. Los recorremos
        estaciones.forEach(estacion => {
    
            // if(estacion.usuario == "user1"){
    
            // Vamos a ir adjuntando elementos a la tabla.
            const $fila = document.createElement("tr");
    
            // La celda del IDEESS
            const $celdaIDEESS = document.createElement("td");
            // Colocamos su valor y lo adjuntamos a la fila
            $celdaIDEESS.innerText = ""+estacion["ideess"];
            $fila.appendChild($celdaIDEESS);
    
            // Lo mismo para lo demás
            const $celdaCP = document.createElement("td");
            $celdaCP.innerText = estacion.cp;
            $fila.appendChild($celdaCP);
    
            const $celdaDireccion = document.createElement("td");
            $celdaDireccion.innerText = estacion.direccion;
            $fila.appendChild($celdaDireccion);
    
            const $celdaHorario = document.createElement("td");
            $celdaHorario.innerText = estacion.horario;
            $fila.appendChild($celdaHorario);
    
            const $celdaLocalidad = document.createElement("td");
            $celdaLocalidad.innerText = estacion.localidad;
            $fila.appendChild($celdaLocalidad);
    
            
    
            // Extraer el id del estacion en el que estamos dentro del ciclo
            const ideess = estacion.ideess;
    
            // Para el botón de eliminar primero creamos el botón, agregamos su listener y luego lo adjuntamos a su celda
            const $botonEliminar = document.createElement("button");
            $botonEliminar.setAttribute("class", "btn btn-primary");
            // $botonEliminar.innerHTML = `<i class="bi bi-trash-fill"></i>`;
            $botonEliminar.innerText = "Borrar";
            $botonEliminar.onclick = async () => {
    
                const url = `./eliminar_favorito.php?id=${ideess}`;
                const respuestaRaw = await fetch(url, {
                    method: "DELETE",
                });
                const respuesta = await respuestaRaw.json();
                if (respuesta) {
                    // alert("Estacion eliminada");
                } else {
                    alert("El servidor no respondió con una respuesta exitosa");
                }
                // De cualquier modo, volver a obtener los estaciones para refrescar la tabla
                obtenerEESS();
            };
            const $celdaBoton = document.createElement("td");
            $celdaBoton.appendChild($botonEliminar);
            $fila.appendChild($celdaBoton);
            // Adjuntamos la fila a la tabla
            $cuerpoTabla.appendChild($fila);
    
            // }
    
    
        });
}
//#endregion

//#region Obtener los datos del usuario logeado
const obtenerDatosUser = async () => {

    const $datosUser = document.getElementById("datosUser");
    // Es una petición GET, no necesitamos indicar el método ni el cuerpo
    const respuestaRaw = await fetch("obtener_datosUser.php");
    const usuarios = await respuestaRaw.json();
    
    // console.log(respuestaRaw);
    console.log(usuarios);

    // // Limpiamos la tabla
    // $datosUser.innerHTML = "";
    // Ahora ya tenemos a los usuarios. Los recorremos
    for (const user of usuarios) {

        // document.getElementById("nombreUser").innerText = ""+user.nombre+" "+user.apellidos;




        // document.getElementsByName('modifi_usuar').setAttribute('value','Pinocho');
        // console.log(document.getElementsByName('modifi_usuar').value);
        

        // document.getElementsByName('modifi_nombre').value = "Pinocho";
        // console.log(document.getElementsByName('modifi_nombre').value);



        // // Vamos a ir adjuntando elementos a la tabla.
        // const $list = document.createElement("ul");

        // // La celda del IDEESS
        // const $filaNombre = document.createElement("li");
        // // Colocamos su valor y lo adjuntamos a la list
        // $filaNombre.innerText = ""+user.nombre+" "+user.apellidos;
        // $list.appendChild($filaNombre);

        // // Lo mismo para lo demás
        // const $filaEmail = document.createElement("li");
        // $filaEmail.innerText = "Email: "+user.email;
        // $list.appendChild($filaEmail);

        // const $filaPoblacion = document.createElement("li");
        // $filaPoblacion.innerText = "Población: "+user.localidad+", "+user.codigo_postal;
        // $list.appendChild($filaPoblacion);

        // const $filaCombus = document.createElement("li");
        // $filaCombus.innerText = "Tipo de combustible: "+user.tipo_combustible;
        // $list.appendChild($filaCombus);

        // const $filaDepos = document.createElement("li");
        // $filaDepos.innerText = "Tamaño deposito: "+user.deposito+"l";
        // $list.appendChild($filaDepos);


        // // Adjuntamos la list a la tabla
        // $datosUser.appendChild($list);

    }
};
//#endregion

//#region Obtener los vehiculos de cada usuario
const obtenerVehiculos = async () => {
    // Es una petición GET, no necesitamos indicar el método ni el cuerpo
    const respuestaRaw = await fetch("obtener_vehiculos.php");
    const vehiculos = await respuestaRaw.json();
    
    console.log(respuestaRaw);
    console.log(vehiculos);

    dibujarVehiculos(vehiculos);

};
obtenerVehiculos();
//#endregion

//#region Dibujar las estaciones
function dibujarVehiculos(vehiculos) {
    // Limpiamos la tabla
    $crpTabla.innerHTML = "";
    // Ahora ya tenemos a los vhiculos. Los recorremos
    for (const vehiculo of vehiculos) {

        // if(vehiculo.usuario == "user1"){

        // Vamos a ir adjuntando elementos a la tabla.
        const $fila = document.createElement("tr");

        // La celda del IDEESS
        const $celdaMatricula = document.createElement("td");
        // Colocamos su valor y lo adjuntamos a la fila
        $celdaMatricula.innerText = ""+vehiculo["matricula"];
        $fila.appendChild($celdaMatricula);

        // Lo mismo para lo demás
        const $celdaMarca = document.createElement("td");
        $celdaMarca.innerText = vehiculo.marca;
        $fila.appendChild($celdaMarca);

        const $celdaModelo = document.createElement("td");
        $celdaModelo.innerText = vehiculo.modelo;
        $fila.appendChild($celdaModelo);

        const $celdaCombustible = document.createElement("td");
        $celdaCombustible.innerText = vehiculo.combustible;
        $fila.appendChild($celdaCombustible);

        const $celdaDeposito = document.createElement("td");
        $celdaDeposito.innerText = vehiculo.deposito;
        $fila.appendChild($celdaDeposito);

        

        // Extraer el id del vehiculo en el que estamos dentro del ciclo
        const matr = vehiculo.matricula;

        // Para el botón de eliminar primero creamos el botón, agregamos su listener y luego lo adjuntamos a su celda
        const $botonElim = document.createElement("button");
        $botonElim.setAttribute("class", "btn btn-primary");
        // $botonElim.innerHTML = `<i class="bi bi-trash-fill"></i>`;
        $botonElim.innerText = "Borrar";
        $botonElim.onclick = async () => {

            const url = `./eliminar_vehiculo.php?matr=${matr}`;
            const respuestaRaw = await fetch(url, {
                method: "DELETE",
            });
            const respuesta = await respuestaRaw.json();
            if (respuesta) {
                // alert("vehiculo eliminada");
            } else {
                alert("El servidor no respondió con una respuesta exitosa");
            }
            // De cualquier modo, volver a obtener los vehiculoes para refrescar la tabla
            obtenerVehiculos();
        };
        const $celdaBoton = document.createElement("td");
        $celdaBoton.appendChild($botonElim);
        $fila.appendChild($celdaBoton);
        // Adjuntamos la fila a la tabla
        $crpTabla.appendChild($fila);

        // }


    }
}
//#endregion

//#region Guardar VEHICULOS
async function guardarVehiculo(){
    var 
        matricula = document.getElementById('matricula').value,
        marca = document.getElementById('marca').value,
        modelo = document.getElementById('modelo').value,
        combustible = document.getElementById('selectCombustibles').value,
        deposito = document.getElementById('deposi').value;
        
    
    // Lo que vamos a enviar a PHP
    const cargaUtil = {

        matricula,
        marca,
        modelo,
        combustible,
        deposito,

    };
    const cargaUtilCodificada = JSON.stringify(cargaUtil);
    try {
        const respuestaRaw = await fetch("guardar_vehiculo.php", {
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
        console.log("Error de servidor. Inténtalo de nuevo. El error es: " + e);
    }
    obtenerVehiculos();
};
//#endregion

//#region Editar VEHICULOS
async function editarVehiculo(){
    var 
        matricula = document.getElementById('matricula').value,
        marca = document.getElementById('marca').value,
        modelo = document.getElementById('modelo').value,
        combustible = document.getElementById('selectCombustibles').value,
        deposito = document.getElementById('deposi').value;
        
    
    // Lo que vamos a enviar a PHP
    const cargaUtil = {

        matricula,
        marca,
        modelo,
        combustible,
        deposito,

    };
    const cargaUtilCodificada = JSON.stringify(cargaUtil);
    try {
        const respuestaRaw = await fetch("modificar_vehiculo.php", {
            method: "POST",
            body: cargaUtilCodificada,
        });
        console.log("Respuesta Cruda: "+respuestaRaw);
        const respuesta = await respuestaRaw.json();
        console.log("Respuesta : "+respuesta);
        if (respuesta) {
            // alert("Vehiculo modificado");
        } else {
            alert("El servidor no envió una respuesta exitosa");
        }
    } catch (e) {
        // En caso de que haya un error
        console.log("Error de servidor. Inténtalo de nuevo. El error es: " + e);
    }
    obtenerVehiculos();
};
//#endregion
