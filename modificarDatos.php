<?php include_once "encabezado.php" ?>



<!-- ///////////////////////////////////////////////////// Contenedor principal /////////////////////////////////////////////////////////////// -->
        <div class="container">

        <div class="row justify-content-md-center">
            <div class="col-10 col-lg-10">
            
                <form action="modificar_usuario.php" method="GET" class="formulario" id="formulario">


                <div class="row">
                    <!-- Grupo usuario-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_usuar" id="usuar" placeholder="Usuario" disabled>
                            <?php echo '<label for="usuar">Usuario: <b>'.$_SESSION["usuario"].'</b></label>';  ?>
                        </div>
                    </div>
                    <!-- Grupo email-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="modifi_email" id="email" placeholder="Email">
                            <label for="email">Correo electronico</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Grupo nombre-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_nombre" id="nombre" placeholder="Nombre">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <!-- Grupo apellidos-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_apellidos" id="apellidos" placeholder="Apellidos">
                            <label for="apellidos">Apellidos</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Grupo contraseña-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="modifi_pass" id="pass" placeholder="Contraseña">
                            <label for="pass">Contraseña</label>
                        </div>
                    </div>
                    <!-- Grupo coontraseña-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="modifi_pass2" id="pass2" placeholder="Repite la contraseña">
                            <label for="pass2">Repite la contraseña</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Grupo localidad-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_localidad" id="localidad" placeholder="Localidad">
                            <label for="localidad">Localidad</label>
                        </div>
                    </div>
                    <!-- Grupo codigo postal-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_codigo_postal" id="codigo_postal" placeholder="Código postal">
                            <label for="codigo_postal">Código postal</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Grupo Tipo de combustible-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                        <select class="form-select" id="selectCombustible" name="modifi_tipo_combustible" aria-label="Default select example" placeholder="Tipo de combustible">
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
                            <label for="selectCombustible">Tipo de combustible</label>
                        </div>
                    </div>
                    <!-- Grupo deposito-->
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="modifi_deposito" id="deposito" placeholder="Tamaño deposito en l">
                            <label for="deposito">Tamaño deposito en l</label>
                        </div>
                    </div>
                </div>



                    

                    <!-- Grupo nombre-->
                    <!-- <div class="formulario-group" id="grupo-nombre">
                        <label for="nombre" class="formulario-label">Nombre</label>
                        <div class="formulario-group-input">
                            <input type="text" class="formulario-input" name="modifi_nombre" id="nombre" placeholder="nombre">
                        </div>
                        <p class="formulario-input-error">El nombre tiene que tener entre 0 y 16 dígitos.</p>
                    </div> -->

                    <!-- Grupo apellidos-->
                    <!-- <div class="formulario-group" id="grupo-apellidos">
                        <label for="apellidos" class="formulario-label">Apellidos</label>
                        <div class="formulario-group-input">
                            <input type="text" class="formulario-input" name="modifi_apellidos" id="apellidos" placeholder="apellidos">
                        </div>
                        <p class="formulario-input-error">Los apellidos tiene que tener entre 0 y 32 dígitos.</p>
                    </div> -->

                    <!-- Grupo email-->
                    <!-- <div class="formulario-group" id="grupo-email">
                        <label for="email" class="formulario-label">Email</label>
                        <div class="formulario-group-input">
                            <input type="email" class="formulario-input" name="modifi_email" id="email" placeholder="correo@correo.com">
                        </div>
                        <p class="formulario-input-error">Error.</p>
                    </div> -->

                    <!-- Grupo contraseña-->
                    <!-- <div class="formulario-group" id="grupo-password">
                        <label for="password" class="formulario-label">Contraseña</label>
                        <div class="formulario-group-input">
                            <input type="password" class="formulario-input" name="modifi_pass" id="pass">
                        </div>
                        <p class="formulario-input-error">El password tiene que tener entre 4 y 12 dígitos.</p>
                    </div> -->

                    <!-- Grupo contraseña2-->
                    <!-- <div class="formulario-group" id="grupo-password2">
                        <label for="password2" class="formulario-label">Repita la contraseña</label>
                        <div class="formulario-group-input">
                            <input type="password" class="formulario-input" name="modifi_pass2" id="pass2">
                        </div>
                        <p class="formulario-input-error">Las contraseñas han de ser iguales.</p>
                    </div> -->

                    <!-- Grupo localidad-->
                    <!-- <div class="formulario-group" id="grupo-localidad">
                        <label for="localidad" class="formulario-label">Localidad</label>
                        <div class="formulario-group-input">
                            <input type="text" class="formulario-input" name="modifi_localidad" id="localidad" placeholder="localidad">
                        </div>
                        <p class="formulario-input-error">El localidad tiene que tener entre 0 y 16 dígitos.</p>
                    </div> -->

                    <!-- Grupo cp-->
                    <!-- <div class="formulario-group" id="grupo-cp">
                        <label for="cp" class="formulario-label">Codigo postal</label>
                        <div class="formulario-group-input">
                            <input type="text" class="formulario-input" name="modifi_codigo_postal" id="codigo_postal" placeholder="codigo postal">
                        </div>
                        <p class="formulario-input-error">El codigo postal tiene que tener 5 dígitos.</p>
                    </div> -->

                    <!-- Grupo localidad-->
                    <!-- <div class="formulario-group" id="grupo-localidad">
                        <label for="localidad" class="formulario-label">Localidad</label>
                        <div class="formulario-group-input">
                            <select class="form-select" id="selectCombustible" name="modifi_tipo_combustible" aria-label="Default select example">
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
                        </div>
                        <p class="formulario-input-error">Selecciona uno.</p>
                    </div> -->

                    <!-- Grupo deposito-->
                    <!-- <div class="formulario-group" id="grupo-deposito">
                        <label for="deposito" class="formulario-label">Tamaño de tu deposito</label>
                        <div class="formulario-group-input">
                            <input type="text" class="formulario-input" name="modifi_deposito" id="deposito" placeholder="Tamaño deposito en l">
                        </div>
                        <p class="formulario-input-error">El deposito tiene que tener entre 0 y 16 dígitos.</p>
                    </div>

                    <div class="formulario-mensaje" id="formulario-mensaje">
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-exclamation-diamond-fill" viewBox="0 0 16 16">
                                <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <b>Error:</b> Por favor, rellena bien el formulario.
                        </p>
                    </div> -->

                    <div class="formulario-group formulario-group-btn-enviar">
                    <button type="submit" class="btn btn-primary" onclick="console.log('Enviado')" style="width: 200px; float: right;">Enviar</button>
                    </div>

                </form>

            </div>
        </div>

        <script>
             window.onload = obtenerDatosUser();
        </script>





            
        </div>

        <!-- <script type="text/javascript" src="./js/formulario.js"></script> -->
        
        
<?php include_once "pie.php" ?>