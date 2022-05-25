
<?php include_once "encabezado.php" ?>

          <div class="container">
            <div class="row">
              <div class="col-12" id="">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 5px;">
                    <div class="container-fluid">
                      <a class="navbar-brand">Estaciones de servicio favoritas</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav1">
                        <ul class="navbar-nav">
                          <li class="nav-item">
                            <button type="button" class="btn btn-primary" aria-current="page" onclick="obtenerEESS()">Cargar tabla</button>
                            <!-- <a href="agregar.php">Agregar a favoritos</a> -->
                          </li>
                          <!-- <li class="nav-item">
                            <button type="button" class="btn btn-primary" aria-current="page">Borrar estación</button>
                            <a href="eliminar_favorito.php"><button type="button" class="btn btn-primary" aria-current="page">Borrar</button></a>
                          </li> -->
                        </ul>
                      </div>
                    </div>
                  </nav>
              </div>
            </div>


            <div class="row">
              <div class="col-12" id="">
                  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-radius: 5px;">
                    <div class="container-fluid">
                      <a class="navbar-brand">Buscador:</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav2" aria-controls="navbarNav2" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav2">
                        <ul class="navbar-nav">
                            <li class="list-group-item">
                              <select class="form-select" id="selectCCAA" name="selectCCAA" aria-label="Default select example" onchange="buscarProvincias(document.getElementById('selectCCAA').value);">
                                  <option selected disabled>Selecciona una CCAA</option>
                              </select>
                            </li>
                            <li class="list-group-item">
                              <select class="form-select" id="selectProvincia" name="selectProvincia" aria-label="Default select example" onchange="buscarMunicipios(document.getElementById('selectProvincia').value)">
                                  <option selected disabled>Selecciona una PROVINCIA</option>
                              </select>
                            </li>
                            <li class="list-group-item">
                              <select class="form-select" id="selectMunicipio" name="selectMunicipio" aria-label="Default select example" onchange="buscarEESSporMunicipio(document.getElementById('selectMunicipio').value);">
                                  <option selected disabled>Selecciona un MUNICIPIO</option>
                              </select>
                            </li>
                            <li class="list-group-item">
                              <select class="form-select" id="selectEstacion" name="selectEstacion" aria-label="Default select example">
                                  <option selected disabled>Selecciona una ESTACION DE SERVICIO</option>
                              </select>
                            </li>
                            <li class="nav-item">
                              <button type="button" id="btnGuardar" class="btn btn-primary" aria-current="page" onclick="guardarFavorito(document.getElementById('selectMunicipio').value, document.getElementById('selectEstacion').value)">Agregar</button>
                            <!-- <a href="agregar.php">Agregar a favoritos</a> -->
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
              </div>
            </div>

            <div class="row">
              <div class="col-12" id="">
                <div class="table-responsive" style="background-color: white; border-radius: 5px;">
                  <table class="table table-hover align-middle" id="tabla">
                    <thead class="table-light" id="tablaHeaders">
                      <tr>
                        <th>Id EESS</th>
                        <th>C.P.</th>
                        <th>DIRECCION</th>
                        <th>HORARIO</th>
                        <th>LOCALIDAD</th>
                        <th>PRECIOS</th>
                        <th>BORRAR</th>
                      </tr>
                    </thead>
                    <tbody id="tablaFavoritos">
                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>


<?php include_once "pie.php" ?>