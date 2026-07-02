<?php
    include 'header.php';
?>
<main class="container">
    <div>
        <h3>Ingrese su Id</h3>
        <input type="text" id="idUsuario" name="idUsuario" class="form-control mb-3" placeholder="id"
        aria-labelledby="passwordHelpInline">
        <a id="btnActualizar" type="button" class="btn btn-primary">Ir</a>
    </div>
</main>

<script src="js/actualizarDatosUsuario.js"></script>


<?php
   include 'footer.php';
?>