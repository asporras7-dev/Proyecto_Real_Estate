<?php
    include 'header.php';
?>

<main>
    <div class="container">
        <div class="d-flex bd-highlight mb-3">
            <div class="me-auto p-2 bd-highlight">
                <h2>Catálogo de Propiedades
            </div>
            <div class="p-2 bd-highlight">

                <a href="#" class="btn btn-secondary"><i class="fas fa-plus"></i>Nueva</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Whatsapp</th>
                        <th scope="col">Correo Electronico</th>
                        <th scope="col">Espacios en la cochera</th>
                        <th scope="col">Habitaciones</th>
                        <th scope="col">Baños</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody id="datosTablaPropiedades">
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
                        <td scope="col"></td>
                        <td scope="col"></td>
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