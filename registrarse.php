<?php
include "header.php";
?>


<main>
    <form id="registrarUsuario" class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Regresar</a>
            </div>

            <div class="me-auto p-2 bd-highlight ">
                <h2>Registrarse
            </div>
        </div>
        <div class="col-auto">
            <label for="id" class="col-form-label">Cedula</label>
        </div>
        <div class="col-auto">
            <input type="text" name="id" id="id" class="form-control" placeholder="id"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="clave" class="col-form-label">Contraseña</label>
        </div>
        <div class="col-auto">
            <input type="text" name="clave" id="clave" class="form-control" placeholder="contraseña"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="nombre" class="col-form-label">Nombre</label>
        </div>
        <div class="col-auto">
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="apellido1" class="col-form-label">Apellido1</label>
        </div>
        <div class="col-auto">
            <input type="text" name="apellido1" id="apellido1" class="form-control" placeholder="apellido1"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="apellido2" class="col-form-label">Apellido2</label>
        </div>
        <div class="col-auto">
            <input type="text" name="apellido2" id="apellido2" class="form-control" placeholder="apellido2"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="correo" class="col-form-label">Correo Electronico</label>
        </div>
        <div class="col-auto">
            <input type="text" name="correo" id="correo" class="form-control" placeholder="correo"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="fechaNacimiento" class="col-form-label">Fecha de nacimiento</label>
        </div>
        <div class="col-auto">
            <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control"
                placeholder="fecha de nacimiento" aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="telefono" class="col-form-label">Telefono</label>
        </div>
        <div class="col-auto">
            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="telefono"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="email" class="col-form-label">Email</label>
        </div>
        <div class="col-auto">
            <input type="text" name="email" id="email" class="form-control" placeholder="email"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="whatsapp" class="col-form-label">Whatsapp</label>
        </div>
        <div class="col-auto">
            <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="whatsapp"
                aria-labelledby="passwordHelpInline">
        </div>
        </div>
        <div class="col-auto">
            <button id="btnRegistrarse" type="button" class="btn btn-primary">Guardar</button>
            <button id="cancelarDatos" type="reset" class="btn btn-primary">Cancelar</button>
        </div>
    </form>

</main>

<script src="js/registrarse.js"></script>


<?php
    include 'footer.php';
?>