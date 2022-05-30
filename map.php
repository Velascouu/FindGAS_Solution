

<?php include_once "encabezado.php" ?>




<!-- ///////////////////////////////////////////////////// Contenedor principal /////////////////////////////////////////////////////////////// -->
        <div class="container">
            <div class="row">
                <!--  Contenedor selects  -->
                <div class="col-12 col-lg-4" id="selectsArea">

                    <div class="card" style="width: 100%; height: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Buscador</h5>
                            <p class="card-text">Rellena las siguientes opciones para encontrar las estaciones de servicio del municipio que quieras.</p>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
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
                                    <div id="liveAlertPlaceholder"></div>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="card-subtitle mb-2 text-muted">Comunidad autónoma:</h6>
                                    <select class="form-select" id="selectCCAA" name="selectCCAA" aria-label="Default select example" onchange="buscarProvincias(document.getElementById('selectCCAA').value); centrarCCAA(document.getElementById('selectCCAA').value); centrarCCAA(document.getElementById('selectCCAA').value);">
                                        <option selected disabled>Selecciona una CCAA</option>
                                    </select>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="card-subtitle mb-2 text-muted">Provincia:</h6>
                                    <select class="form-select" id="selectProvincia" name="selectProvincia" aria-label="Default select example" onchange="buscarMunicipios(document.getElementById('selectProvincia').value)">
                                        <option selected disabled>Selecciona una PROVINCIA</option>
                                    </select>
                                </li>
                                <li class="list-group-item">
                                    <h6 class="card-subtitle mb-2 text-muted">Municipio:</h6>
                                    <select class="form-select" id="selectMunicipio" name="selectMunicipio" aria-label="Default select example" onchange="buscarEESSporMun(document.getElementById('selectMunicipio').value);">
                                        <option selected disabled>Selecciona un MUNICIPIO</option>
                                    </select>
                                </li>
                              </ul>
                        </div>
                    </div>
                    


                    </div>
                    <!--  Contenedor mapa  -->
                    <div class="col-12 col-lg-8" id="map_canvas" onload="inicioMap()">
                    
                </div>
            </div>
            <div class="row">
                <!--  Contenedor datos EESS  -->
                <div class="col-12" id="estacionesArea">
                    <div class="table-responsive" style="background-color: white; border-radius: 5px;">
                        <table class="table table-hover align-middle" id="tabla">
                            <thead class="table-light" id="tablaHeaders">
                                
                            </thead>
                            <tbody id="tablaEESS">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




<?php include_once "pie.php" ?>