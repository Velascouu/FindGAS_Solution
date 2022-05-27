<?php
?>
    
<!-- ////////////////////////////////////  MODAL   /////////////////////////////////////////////////// -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 50px;">
                <div class="container">
                    <img src="./assets/img/FindGAS_over.png" class="mx-auto d-block" style="width: 200px; height: 200px;"/>    
                </div>
                <br>
                
                <!-- Formulario Inicio de Sesion -->
                <form name="inicioSesion" action="obtener_user.php" method="GET">
                    <div class="mb-3">
                    <label for="inputEmail" class="form-label">Correo electrónico:</label>
                    <input type="text" class="form-control" id="user" name="user" aria-describedby="emailHelp" placeholder="Usuario">
                    <div id="emailHelp" class="form-text">Debe estar registrado, si no lo esta, registrese <a href="./registro.php">aquí</a>.</div>
                    </div>
                    <div class="mb-3">
                    <label for="inputPassword" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Contraseña">
                    </div>
                    <button type="submit" class="btn btn-primary" style="float: right;" >Iniciar sesión</button>
                    <input type="text" id="pasador" hidden>
                </form>


            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="./js/bd.js"></script> -->
    <script type="text/javascript" src="./js/funciones.js"></script>
    <script type="text/javascript" src="js/prod.js"></script>
    <script type="text/javascript" src="js/agregar_fav.js"></script>

</body>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBeNRBEIWYeWRRvY8On_9pkSD1_J_zLykQ&libraries=geometry"></script>
<script src="./js/funciones.js"></script>
<script src="./js/map.js"></script>
</html>