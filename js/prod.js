


const $cuerpoTabla = document.querySelector("#tablaFavoritos");

const obtenerEESS = async () => {
    // Es una petición GET, no necesitamos indicar el método ni el cuerpo
    const respuestaRaw = await fetch("obtener_estaciones.php");
    const estaciones = await respuestaRaw.json();
    // Limpiamos la tabla
    $cuerpoTabla.innerHTML = "";
    // Ahora ya tenemos a los estaciones. Los recorremos
    for (const estacion of estaciones) {
        // Vamos a ir adjuntando elementos a la tabla.
        const $fila = document.createElement("tr");

        // La celda del IDEESS
        const $celdaIDEESS = document.createElement("td");
        // Colocamos su valor y lo adjuntamos a la fila
        $celdaIDEESS.innerText = estacion.IDEESS;
        $fila.appendChild($celdaIDEESS);

        // Lo mismo para lo demás
        const $celdaCP = document.createElement("td");
        $celdaCP.innerText = estacion.CP;
        $fila.appendChild($celdaCP);

        const $celdaDireccion = document.createElement("td");
        $celdaDireccion.innerText = estacion.Direccion;
        $fila.appendChild($celdaDireccion);

        const $celdaHorario = document.createElement("td");
        $celdaHorario.innerText = estacion.Horario;
        $fila.appendChild($celdaHorario);

        const $celdaLocalidad = document.createElement("td");
        $celdaLocalidad.innerText = estacion.Localidad;
        $fila.appendChild($celdaLocalidad);

        // const $celdaPrecio = document.createElement("td");
        // $celdaPrecio.innerText = estacion.precio;
        // $fila.appendChild($celdaPrecio);

        // Extraer el id del estacion en el que estamos dentro del ciclo
        const ideess = estacion.IDEESS;


        // const $linkPrecios = document.createElement("a");
        // $linkPrecios.href = "./editar_producto.php?id=" + idProducto;
        // $linkPrecios.innerHTML = `<i class="bi bi-eye-fill"></i>`;
        // $linkPrecios.setAttribute("onclick", "console.log('Ver preciooosss')");
        // const $celdalinkPrecios = document.createElement("td");
        // $celdalinkPrecios.appendChild($linkPrecios);
        // $fila.appendChild($celdalinkPrecios);

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
                alert("Estacion eliminada");
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