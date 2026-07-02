<?php
include 'header.php'
    ?>
<main>
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Seccion Administrativa</h2>
        </div>
        <div class="p-2 bd-highlight">
            <a href="login.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Regresar</a>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Administrar Usuarios</h5>
                <p class="card-text">Catalogo de informacion de los usuarios</p>
                <a class="btn btn-primary" href="listaUsuarios.php">Ir</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Administrar Propiedades</h5>
                <p class="card-text">Catalogo de informacion de las propiedades</p>
                <a href="listaPropiedades.php" class="btn btn-primary" type="submit">Ir</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <img src="" alt="">
            <div class="card-body">
                <h5 class="card-title">Reportes de votacion</h5>
                <p class="card-text">Resultados de las elecciones</p>
                <a href="#" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </div>
</main>


<?php
include 'footer.php';
?>