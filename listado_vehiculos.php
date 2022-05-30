<?php include_once "encabezado.php" ?>

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Rellene los campos:</h5>
                    <p>Si desea añadir o editar la información de alguno de sus vehículos</p>
                    <div class="row">
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="matricula" id="matricula" placeholder="Matrícula">
                                <label for="matricula">Matrícula</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="marca" id="marca" placeholder="Marca">
                                <label for="marca">Marca</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="modelo" id="modelo" placeholder="Modelo">
                                <label for="modelo">Modelo</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selectCombustibles" name="combustible" aria-label="Default select example" placeholder="Tipo de combustible">
                                    <option selected disabled>Selecciona un tipo de COMBUSTIBLE</option>
                                    <option value="Gasolina 95">Gasolina 95</option>
                                    <option value="Diesel">Diesel</option>
                                    <option value="Eléctrico">Eléctrico</option>
                                    <option value="Híbrido">Híbrido</option>
                                    <option value="Biodiesel">Biodiesel</option>
                                    <option value="Bioetanol">Bioetanol</option>
                                    <option value="GNC">Gas Natural Comprimido</option>
                                    <option value="GNL">Gas Natural Licuado</option>
                                    <option value="Hidrógeno">Hidrógeno</option>
                                </select>
                                <label for="selectCombustible">Tipo de combustible</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="deposi" id="deposi" placeholder="Depósito">
                                <label for="deposi">Depósito</label>
                            </div>
                        </div>
                        <div class="col-12 col-lg-2">
                            <button type="button" id="add" class="btn btn-primary" aria-current="page" onclick="guardarVehiculo()" style="margin: 1px;">Agregar</button>
                            <button type="button" id="editar" class="btn btn-primary" aria-current="page" onclick="editarVehiculo()" style="margin: 1px;">Editar</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
              <div class="col-12" id="">
                <div class="table-responsive" style="background-color: white; border-radius: 5px;">
                  <table class="table table-hover align-middle" id="tabla">
                    <thead class="table-light" id="tablaHeaders">
                      <tr>
                        <th>MATRICULA</th>
                        <th>MARCA</th>
                        <th>MODELO</th>
                        <th>COMBUSTIBLE</th>
                        <th>DEPOSITO</th>
                        <th>BORRAR</th>
                      </tr>
                    </thead>
                    <tbody id="tablaVehiculos">
                            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>


<?php include_once "pie.php" ?>