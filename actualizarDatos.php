<?php
    include 'header.php';
?>

<main class="container mt-5 mb-5">
    <form id="frmActualizarDatos" class="w-40 m-auto" action="" method="POST" enctype="multipart/form-data">
        <div class="d-flex justify-content-center bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="seccionUsuario.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Regresar</a>
            </div>
            <div class="me-auto p-2 bd-highlight ">
                <h2>Actualizar datos de la cuenta 
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
            <input type="text" name="clave" id="clave" class="form-control" placeholder="clave"
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
            <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control" placeholder="fecha de nacimiento"
                aria-labelledby="passwordHelpInline">
        </div>
        <div class="col-auto">
            <label for="itelefono" class="col-form-label">Telefono</label>
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
        <div class="col-auto mb-3">
            <button id="btnActualizarDatos" type="button" class="btn btn-primary">Actualizar Datos</button>
            <button id="cancelarDatos" type="reset" class="btn btn-primary">Cancelar</button>
        </div>
    </form>

</main>


<script src="js/actualizarDatosUsuario.js"></script>
<script src="js/modificarDatosActualizados.js"></script>
<script src="js/vendor/modernizr-3.11.2.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

