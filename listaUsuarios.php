<?php
include 'header.php';
?>

<main>
    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Catálogo de Usuarios
            </div>
            <div class="p-2 bd-highlight">
                <a href="nuevoUsuario.php" class="btn btn-secondary"><i class="fas fa-plus"></i>Nuevo</a>
                <a href="seccionAdministrativa.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Regresar</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido1</th>
                        <th scope="col">Apellido2</th>
                        <th scope="col">Correo electronico</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Whatsapp</th>
                    </tr>
                </thead>
                <tbody id="datosTabla">
                    <tr>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col"></td>
                        <td scope="col">
                            <a href="#" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                            <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>


<?php
include 'footer.php';
?>