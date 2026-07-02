<?php
include 'header.php';
?>

<main>
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Seccion Usuarios
        </div>
        <div class="p-2 bd-highlight">
            <a href="login.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Regresar</a>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Administración de propiedades</h5>
                <p class="card-text">Catalogo de informacion de las propiedades del usuario</p>
                <a href="#" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Actualizar datos</h5>
                <p class="card-text">Actualizacion de datos de la cuenta del usuario</p>
                <a id="btnActualizarDatos" href="verificarId.php" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </div>
</main>


<?php
include 'footer.php';
?>