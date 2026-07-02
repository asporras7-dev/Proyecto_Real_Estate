<?php
include "header.php";

?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
  integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<main>
  <form action="https://formsubmit.co/theporras17@gmail.com" method="POST">
    <section class="container my-5">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h1 class="text-center mb-4">Contactenos</h1>
          <div class="form-group">
            <label for="inputName">Nombre</label>
            <input type="text" class="form-control" id="inputName" name="nombre" required>
          </div>
          <div class="form-group">
            <label for="inputEmail">Correo electronico</label>
            <input type="email" class="form-control" id="inputEmail" name="email" required>
          </div>
          <div class="form-group">
            <label for="inputType">Tipo de consulta</label>
            <select class="form-control" id="inputType" name="tipo" required>
              <option value="">--Seleccione una opción--</option>
              <option value="Comprar">Comprar</option>
              <option value="Vender">Vender</option>
              <option value="Rentar">Rentar</option>
              <option value="Otro">Otro</option>
            </select>
          </div>
          <div class="form-group">
            <label for="inputMessage">Mensaje</label>
            <textarea class="form-control" id="inputMessage" name="mensajes" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary" id="btnEnviar">Enviar consulta</button>
        </div>
      </div>

      <input type="hidden" name="_next" value="http://localhost/proyecto/contactenos.php">
      <input type="hidden" name="_captcha" value="false">

    </section>
  </form>

  <div class="row">
    <h2>Visitenos en nuestras oficinas</h2>
    <fieldset id="fieldMapa">
      <div id='mapaEmpresa' style='width: 500px; height: 400px'></div>
    </fieldset>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="js/mapa.js"></script>

</main>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("btnEnviar").addEventListener("click", function () {
      alert("Los datos se han enviado correctamente.");

    });
  });
</script>

<?php
include "footer.php";
?>