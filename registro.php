


<?php include_once "encabezado.php" ?>



<!-- ///////////////////////////////////////////////////// Contenedor principal /////////////////////////////////////////////////////////////// -->
        <div class="container">

            <form action="goToMap()" method="GET" class="formulario" id="formulario">

                <!-- Grupo usuario-->
                <div class="formulario-group" id="grupo-usuario">
                    <label for="usuario" class="formulario-label">Usuario</label>
                    <div class="formulario-group-input">
                        <input type="text" class="formulario-input" name="usuario" id="usuario" placeholder="usuario">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </div>
                    <p class="formulario-input-error">El usuario tiene que tener entre 4 y 16 dígitos.</p>
                </div>

                <!-- Grupo nombre-->
                <div class="formulario-group" id="grupo-nombre">
                    <label for="nombre" class="formulario-label">Nombre</label>
                    <div class="formulario-group-input">
                        <input type="text" class="formulario-input" name="nombre" id="nombre" placeholder="nombre">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </div>
                    <p class="formulario-input-error">El nombre tiene que tener entre 4 y 16 dígitos.</p>
                </div>

                <!-- Grupo email-->
                <div class="formulario-group" id="grupo-email">
                    <label for="email" class="formulario-label">Email</label>
                    <div class="formulario-group-input">
                        <input type="email" class="formulario-input" name="email" id="email" placeholder="correo@correo.com">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </div>
                    <p class="formulario-input-error">El email tiene que tener entre 4 y 16 dígitos.</p>
                </div>

                <!-- Grupo contraseña-->
                <div class="formulario-group" id="grupo-password">
                    <label for="password" class="formulario-label">Contraseña
                        <input type="password" class="formulario-input" name="password" id="password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </div>
                    <p class="formulario-input-error">El password tiene que tener entre 4 y 12 dígitos.</p>
                </div>

                <!-- Grupo contraseña2-->
                <div class="formulario-group" id="grupo-password2">
                    <label for="password2" class="formulario-label">Repita la contraseña
                        <input type="password" class="formulario-input" name="password2" id="password2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                        </svg>
                    </div>
                    <p class="formulario-input-error">Las contraseñas han de ser iguales.</p>
                </div>

                <!-- Grupo terminos-->
                <div class="formulario-group" id="grupo-terminos">
                    <label class="formulario-label">
                        <input class="formulario-checkbox" type="checkbox" name="terminos" id="terminos">
                        Acepto los terminos y condiciones.
                    </label>
                </div>
                
                <div class="formulario-mensaje" id="formulario-mensaje">
                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="formulario-validacion-estado bi bi-exclamation-diamond-fill" viewBox="0 0 16 16">
                            <path d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995A.905.905 0 0 1 8 4zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <b>Error:</b> Por favor, rellena bien el formulario.
                    </p>
                </div>

                <div class="formulario-group formulario-group-btn-enviar">
                    <button type="submit" class="formulario-btn" onclick="console.log('Enviado')">Enviar</button>
                    <p class="formulario-mensaje-exito" id="formulario-mensaje-exito">Formulario enviado correctamente</p>
                </div>

            </form>
        </div>
        
        
<?php include_once "pie.php" ?>