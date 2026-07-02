<?php
include 'header.php';
?>

<main class="container">
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Seccion Usuario</h2>
                    <p class="card-text">En esta seccion se puede administrar la informacion de tus propiedades .<br>
                    Ademas de actualizar los datos de tu cuenta</p>
                    <a href="seccionUsuario.php" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Seccion Administrativa</h2>
                    <p class="card-text">En esta seccion se pueden insertar, modificar o eliminar usuarios o propiedades.<br>
                    Ademas de administrar los reportes de votacion</p>
                    <a href="seccionAdministrativa.php" class="btn btn-primary">Ir</a>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>