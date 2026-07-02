<?php
    include "header.php";
?>


<main>
  <div class="row justify-content-center mt-5">
    <h1>Inicio de sesión</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="usuarioLogin">Usuario</label>
                        <input type="text" class="form-control" id="usuarioLogin" name="usuarioLogin" required>
                    </div>
                    <div class="form-group">
                        <label for="claveLogin">Contraseña</label>
                        <input type="text" class="form-control" id="claveLogin" name="claveLogin" required>
                    </div>
                    <a id="btnIniciarSesion" class="btn btn-primary" type="submit" >Iniciar sesión</a>
                    <p class="mt-3">¿No tienes cuenta? <a id="register-link" href="registrarse.php" >Registrarse</a></p>
                </form>
            </div>
        </div>
    </div>
</main>

<script src="js/IniciarSesion.js"></script>

<?php
    include "footer.php";
?>


