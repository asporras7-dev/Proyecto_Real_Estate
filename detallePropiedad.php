<?php
ob_start();

include "header.php";
include "propiedades.php";

$casaImagen = $_GET["p"];

// Verificar si la cookie ya existe y si contiene elementos
if (isset($_COOKIE["ultimasPropiedades"])) {
    $ultimasPropiedades = json_decode($_COOKIE["ultimasPropiedades"], true);
} else {
    $ultimasPropiedades = [];
}

// Agregar la imagen de la propiedad actual al comienzo del array
array_unshift($ultimasPropiedades, $casaImagen);

// Limitar el array a las últimas tres imágenes
$ultimasPropiedades = array_slice($ultimasPropiedades, 0, 3);

// Codificar el array en formato JSON y guardarlo en una cookie
setcookie("ultimasPropiedades", json_encode($ultimasPropiedades), time() + 86400 * 30);
?>

<main class="mx-auto">
    <div class="row">
        <div class="col-md-12 col-lg-7 mb-3 mx-auto">
            <?php
            // Incluye la librería phpqrcode
            require_once './phpqrcode/qrlib.php';

            // Itera a través de todas las propiedades
            foreach ($propiedades as $key => $propiedad) {
                if ($propiedad["imagen"] == $casaImagen) {

                    // Genera un código QR para la URL de la propiedad
                    $url = "https://www.tusitio.com/propiedad/{$propiedad['id']}";
                    $qr_file = "qr_code_{$propiedad['id']}.png";
                    QRcode::png($url, $qr_file, QR_ECLEVEL_L, 10);

                    // Agrega la carta de propiedad con el código QR
                    echo "<div class='card mb-3 text-center'>
                <img src='img/$casaImagen' class='card-img-top' alt='...'>
                
                <div class='card-body'>
                    <h5 class='card-title'>$propiedad[nombre]</h5>
                </div>
                <ul class='list-group list-group-flush'>
                    <li class='list-group-item'><strong>Direccion: </strong>$propiedad[direccion]</li>
                    <li class='list-group-item'><strong>Estado: </strong>$propiedad[estado]</li>
                    <li class='list-group-item'><strong>Tipo: </strong>$propiedad[tipo]</li>
                    <li class='list-group-item'><strong>Precio: $</strong>$propiedad[precio]</li>
                    <li class='list-group-item'><strong>Cuartos: </strong>$propiedad[habitaciones]</li>
                    <li class='list-group-item'><strong>Baños: </strong>$propiedad[baños]</li>
                    <li class='list-group-item'><strong>Espacios en la cochera: </strong>$propiedad[espaciosCochera]</li>
                    <li class='list-group-item'><strong>Telefono: </strong>$propiedad[telefono]</li>
                    <li class='list-group-item'><strong>Whatsapp: </strong>$propiedad[whatsapp]</li>
                    <li class='list-group-item'><strong>Correo Electronico: </strong>$propiedad[correo]</li>
                    <li class='list-group-item'><img src='$qr_file' alt='Código QR'></li>
                </ul>
            </div>";
                }
            }
            ?>


        </div>
    </div>
</main>

<?php
include "footer.php";
?>