<?php include_once "encabezado.php" ?>



<!-- ///////////////////////////////////////////////////// Contenedor principal /////////////////////////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4" id="welcomeArea">
                    <div>
                        <img src="./assets/img/FindGAS_icono_modified.png" class="card-img-top" alt="..." style="max-height: 300px; max-width: 300px; margin: 15% 15%;">
                        <h1 style="color: rgb(94, 94, 94); font-size: 4em; text-align: center; font-weight: bold; font-family: Roboto;">¡Bienvenido a FindGAS!</h1>
                        <p style="font-size: 1.2em; font-weight: 200; font-family: Roboto;">En esta web podras encontrar las estaciones de servicio de tu ciudad o de aquella que tu elijas con los precios siempre actualizados para cada combustible.</p>
                        <p style="font-size: 1.2em; font-weight: 200; font-family: Roboto;">Tambíen podrás ver sus ubicaciones en el mapa para encontrar aquella mas barata cerca de ti ;)</p>
                        <p style="font-size: 1.2em; font-weight: 200; font-family: Roboto;">Disfruta de la web.</p>
                    </div>
                </div>
                <div class="col-12 col-lg-1">
                    
                </div>
                <div class="col-12 col-lg-7" id="preciosArea">
                    <div class="card" style="width: 100%; height: auto; background-color: rgb(239, 255, 240); border-radius: 10px; margin-top: 20px; margin-bottom: 20px;">
                        <img src="./assets/img/estacion.jpg" class="card-img-top" alt="..." style="border-radius: 10px;">
                        <div class="card-body">
                            <h5 class="card-title"><b>Descubre los precios medios:</b></h5>
                            <p class="card-text">Calcula los precios medios por comunidad autónoma, provincia o municipio.</p>

                            <li class="list-group-item" style="width: 100%; height: auto; background-color: rgb(239, 255, 240);">
                                    <h6 class="card-subtitle mb-2 text-muted">Tipo de combustible:</h6>
                                    <select class="form-select" id="selectCombustible" name="selectCombustible" aria-label="Default select example" onchange="buscarEESSporMun(document.getElementById('selectMunicipio').value)">
                                        <option selected disabled>Selecciona un tipo de COMBUSTIBLE</option>
                                        <option value="gasolina95">Gasolina 95</option>
                                        <option value="gasolina95premium">Gasolina 95 Premium</option>
                                        <option value="gasolina98">Gasolina 98</option>
                                        <option value="diesel">Diesel</option>
                                        <option value="diesel+">Diesel +</option>
                                        <option value="biodiesel">Biodiesel</option>
                                        <option value="bioetanol">Bioetanol</option>
                                        <option value="GNC">Gas Natural Comprimido</option>
                                        <option value="GNL">Gas Natural Licuado</option>
                                        <option value="hidrogeno">Hidrógeno</option>
                                    </select>
                                </li>
                                <li class="list-group-item" style="width: 100%; height: auto; background-color: rgb(239, 255, 240);">
                                    <h6 class="card-subtitle mb-2 text-muted">Comunidad autónoma:</h6>
                                    <select class="form-select" id="selectCCAA" name="selectCCAA" aria-label="Default select example" onchange="buscarProvincias(document.getElementById('selectCCAA').value); buscarEESSxCCAAyPrecio(document.getElementById('selectCCAA').value, document.getElementById('selectCombustible').value);">
                                        <option selected disabled>Selecciona una CCAA</option>
                                    </select>
                                </li>
                                <li class="list-group-item" style="width: 100%; height: auto; background-color: rgb(239, 255, 240);">
                                    <h6 class="card-subtitle mb-2 text-muted">Provincia:</h6>
                                    <select class="form-select" id="selectProvincia" name="selectProvincia" aria-label="Default select example" onchange="buscarMunicipios(document.getElementById('selectProvincia').value); buscarEESSxProvinciayPrecio(document.getElementById('selectCCAA').value, document.getElementById('selectCombustible').value);">
                                        <option selected disabled>Selecciona una PROVINCIA</option>
                                    </select>
                                </li>
                                <li class="list-group-item" style="width: 100%; height: auto; background-color: rgb(239, 255, 240);">
                                    <h6 class="card-subtitle mb-2 text-muted">Municipio:</h6>
                                    <select class="form-select" id="selectMunicipio" name="selectMunicipio" aria-label="Default select example" onchange="buscarEESSxMunicipioyPrecio(document.getElementById('selectCCAA').value, document.getElementById('selectCombustible').value);">
                                        <option selected disabled>Selecciona un MUNICIPIO</option>
                                    </select>
                                </li>
                              </ul>
                              <div id="inputPrecioMedio" style="width: 500px; text-align: center; padding: 20px;"></div>

                            <!-- <a href="#" class="btn btn-primary" onclick="preciosMedios()">Calcular</a> -->
                        </div>
                        
                </div>
              </div>
        </div>



<?php include_once "pie.php" ?>