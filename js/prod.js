


const $cuerpoTabla = document.querySelector("#tablaFavoritos");

const obtenerEESS = async () => {
    // Es una petición GET, no necesitamos indicar el método ni el cuerpo
    const respuestaRaw = await fetch("obtener_estaciones.php");
    const estaciones = await respuestaRaw.json();
    
    console.log(respuestaRaw);
    console.log(estaciones);

    // Limpiamos la tabla
    $cuerpoTabla.innerHTML = "";
    // Ahora ya tenemos a los estaciones. Los recorremos
    for (const estacion of estaciones) {

        if(estacion.usuario == "user1"){

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

        const $celdaSelect = document.createElement("td");

        const $divSelect = document.createElement("div");
        $divSelect.setAttribute("class", "dropdown");

        const $btnSelect = document.createElement("button");
        $btnSelect.setAttribute("class", "btn btn-primary dropdown-toggle");
        $btnSelect.setAttribute("type", "button");
        $btnSelect.setAttribute("id", "desplegable");
        $btnSelect.setAttribute("data-bs-toggle", "dropdown");
        $btnSelect.setAttribute("aria-expanded", "false");
        $btnSelect.innerText = "Ver precios";
        $divSelect.appendChild($btnSelect);

        //Creo el elemento lista
        const $listaSelect = document.createElement("ul");
        $listaSelect.setAttribute("class", "dropdown-menu");
        $listaSelect.setAttribute("aria-labelledby", "desplegable");

        //Creamos cada uno de los elementos de la lista
        const $elemento1 = document.createElement("li");
        const $subele1 = document.createElement("a");
        $subele1.setAttribute("class", "dropdown-item");
        $subele1.setAttribute("href", "#");

        $subele1.innerText = "Gasolina 95: "+estacion["Precio_Gasolina95E5"]+"";

        $subele1.appendChild($elemento1);
        $elemento1.appendChild($listaSelect);

        const $elemento2 = document.createElement("li");
        const $subele2 = document.createElement("a");
        $subele2.setAttribute("class", "dropdown-item");
        $subele2.setAttribute("href", "#");

        $subele2.innerText = "Gasolina 95: "+estacion["precio_gasoleo_a"]+"";

        $subele2.appendChild($elemento2);
        $elemento2.appendChild($listaSelect);

        $divSelect.appendChild($listaSelect);
        
        $celdaSelect.appendChild($divSelect);
        $fila.appendChild($celdaSelect);

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

        }


    }
};

// Y cuando se incluya este script, invocamos a la función
obtenerEESS();



// const rellenarFormulario = async () => {

//     const urlSearchParams = new URLSearchParams(window.location.search);
//     idProducto = urlSearchParams.get("id"); // <-- Actualizar el ID global
//     // Obtener el producto desde PHP
//     const respuestaRaw = await fetch(`./obtener_producto_por_id.php?id=${idProducto}`);
//     const producto = await respuestaRaw.json();
//     // Rellenar formulario
//     $nombre.value = producto.nombre;
//     $descripcion.value = producto.descripcion;
//     $precio.value = producto.precio;
// };