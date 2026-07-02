<?php
include "header.php";
include "propiedades.php";
?>


<main>
  <!--Filtro de busqueda-->
  <div class="form-container">
    <h3>Filtra tu busqueda</h3>
    <form id="filtro-form" method="POST" action="">
      <div class="form-group">
        <label for="ubicacion">Ubicación:</label>
        <input type="text" id="ubicacion" class="form-control" placeholder="Ingrese la ubicación">
      </div>
      <div class="form-group">
        <label for="habitaciones">Dormitorios:</label>
        <input type="text" id="habitaciones" class="form-control" placeholder="Ingrese la cantidad de dormitorios">
      </div>
      <div class="form-group">
        <label for="precio">Precio maximo:</label>
        <input type="text" id="precio" class="form-control" placeholder="Ingrese el precio maximo">
      </div>
      <button type="submit" id="btnBuscar" class="btn btn-primary">Buscar</button>
    </form>
  </div>
  <!--Filtro de busqueda-->


  <!--Aun te interesa-->
  <?php if (isset($_COOKIE["ultimasPropiedades"])) { ?>
    <section class="container mt-5 mb-5">
      <h2 class="text-center mb-4">¿Aún te interesan?</h2>
      <div class="row">
        <?php
        $ultimasPropiedades = json_decode($_COOKIE["ultimasPropiedades"], true);
        $ultimasPropiedades = array_reverse($ultimasPropiedades); // Invertir el orden del array para mostrar las propiedades más recientes primero
        foreach ($ultimasPropiedades as $imagen) {
          foreach ($propiedades as $propiedad) {
            if ($propiedad["imagen"] === $imagen) {
              echo "<div class='col-md-4 mb-4'>
                    <div class='card h-100'>
                      <img src='img/$propiedad[imagen]' class='card-img-top ' alt='Property Image'>
                      <div class='card-body'>
                        <h5 class='card-title'>$propiedad[nombre]</h5>
                        <p class='card-text'>$propiedad[ubicacion]</p>
                        <ul class='list-unstyled'>
                          <li>Habitaciones:  <strong>$propiedad[estado]</strong></li>
                          <li>Habitaciones: $propiedad[tipo]</li>
                          <li>Habitaciones: $propiedad[habitaciones]</li>
                          <li>Baños: $propiedad[baños]</li>
                          <li>Precio: $" . number_format($propiedad['precio'], 2) . "</li>
                        </ul>
                        <a href='detallePropiedad.php?p=$propiedad[imagen]' class='btn btn-primary btn-block'>Más información</a>
                      </div>
                    </div>
                  </div>";
              break; // Salir del loop interior una vez que se encuentra la propiedad correspondiente
            }
          }
        }
        ?>
      </div>
    </section>
  <?php } ?>
  <!--Aun te interesa-->


  <!--Propiedad-->
  <div class="container my-5 ">
    <h1 class="text-center mb-4">Nuestras propiedades</h1>
    <div class="row propiedades-filtradas">

      <?php
      $primeras_diez = array_slice($propiedades, 0, 10);
      foreach ($primeras_diez as $propiedad) {
        if ($propiedad['estado'] == 'vendido') { // comprobar si el estado es vendido
          continue; // si es vendido, pasar a la siguiente iteración
        }

        ?>
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100 ">
            <img class="card-img-top  img-fluid" src="img/<?php echo $propiedad['imagen']; ?>" alt="Property Image">
            <div class="card-body">
              <h5 class="card-title">
                <?php echo $propiedad['nombre']; ?>
              </h5>
              <p class="card-text" id="estado">Estado:
                <strong>
                  <?php echo $propiedad['estado']; ?>
                </strong>
              </p>
              <p class="card-text" id="tipo">Tipo:
                <?php echo $propiedad['tipo']; ?>
              </p>
              <p class="card-text" id="ubicacion">Ubicación:
                <?php echo $propiedad['ubicacion']; ?>
              </p>
              <p class="card-text">Habitaciones:
                <?php echo $propiedad['habitaciones']; ?>
              </p>
              <p class="card-text">Baños:
                <?php echo $propiedad['baños']; ?>
              </p>
              <p class="card-text"><strong>Precio: $
                  <?php echo number_format($propiedad['precio'], ); ?>
                </strong></p>
              <a href="detallePropiedad.php?p=<?php echo $propiedad['imagen']; ?>" class="btn btn-primary">Más
                información</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <!--Propiedad-->










  <!--Navegacion entre paginas-->
  <ul class="navigation-links ">
    <li><a href="#page-previous">Anterior</a></li>
    <li><a href="#page1">1</a></li>
    <li><a href="SegundaPaginaIndex.php">2</a></li>
    <li><a href="SegundaPaginaIndex.php">Siguiente</a></li>
  </ul>
  <!--Navegacion entre paginas-->



  <!--Porqué elegirnos-->
  <section id="porque-elegirnos">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h2 class="text-center mt-5 mb-4">Porqué elegirnos</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <h4 class="text-center">Experiencia</h4>
          <img src="img/experiencia.jpg" class="img-fluid d-block mx-auto mb-3 porqueelegirnos" alt="Experiencia">
          <p class="text-center">Tenemos más de 10 años de experiencia en la venta de propiedades. Conocemos bien el
            mercado y podemos ayudarte a encontrar la propiedad ideal.</p>
        </div>
        <div class="col-md-4">
          <h4 class="text-center">Atención personalizada</h4>
          <img src="img/atencion.jpg" class="img-fluid d-block mx-auto mb-3 porqueelegirnos"
            alt="Atención personalizada">
          <p class="text-center">Te brindamos una atención personalizada y te guiamos en todo el proceso de compra o
            venta de tu propiedad. Estamos a tu disposición para responder cualquier pregunta que tengas.</p>
        </div>
        <div class="col-md-4">
          <h4 class="text-center">Variedad de propiedades</h4>
          <img src="img/variedad.jpg" class="img-fluid d-block mx-auto mb-3 porqueelegirnos"
            alt="Variedad de propiedades">
          <p class="text-center">Ofrecemos una amplia variedad de propiedades en diferentes zonas y rangos de precios.
            Seguramente encontraremos la propiedad que estás buscando.</p>
        </div>
      </div>
    </div>
  </section>
  <!--Porqué elegirnos-->



  <!--testimonios-->
  <div class="container mt-5" style="margin-bottom: 0em;">
    <br>
    <br>
    <h1></h1>
    <h1 class="text-center mb-5">Testimonios</h1>
    <div id="testimoniosCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row justify-content-center">
            <div class="col-md-3">
              <div class="card mb-4">
                <img src="img/Susan.jpg" class="card-img-top" alt="Imagen testimonio 1">
                <div class="card-body">
                  <h5 class="card-title">Susan Pérez</h5>
                  <p class="card-text">"Gracias a la agencia pude encontrar mi hogar ideal en menos de un mes. El
                    agente
                    de bienes raíces fue muy profesional y me ayudó en todo momento".</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4">
                <img src="img/Maria.jpg" class="card-img-top" alt="Imagen testimonio 2">
                <div class="card-body">
                  <h5 class="card-title">María González</h5>
                  <p class="card-text">"Mi propiedad se había estado vendiendo sin éxito por varios meses, pero
                    después
                    de contratar a Vende tu inmueble S.A, se hizo en poco tiempo"</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4">
                <img src="img/PedrosSanchez.jpg" class="card-img-top" alt="Imagen testimonio 3">
                <div class="card-body">
                  <h5 class="card-title">Pedro Sánchez</h5>
                  <p class="card-text">"La agencia me ayudó a encontrar el apartamento perfecto para mi familia. El
                    proceso fue muy fácil y rápido gracias a la profesionalidad del agente de bienes raíces."</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card mb-4">
                <img src="img/David.jpg" class="card-img-top" alt="Imagen testimonio 3">
                <div class="card-body">
                  <h5 class="card-title">David González</h5>
                  <p class="card-text">"Me ha gustado mucho comprar mi casa con esta agencia de bienes y raices ya
                    que
                    me facilitaron el proceso y se pudo hacer una rapida compra."</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--testimonios-->

</main>

<script>
  const formulario = document.getElementById('filtro-form');
  formulario.addEventListener('submit', function(event) {
    event.preventDefault(); // evita que el formulario se envíe

    const ubicacion = document.getElementById('ubicacion').value;
    const habitaciones = document.getElementById('habitaciones').value;
    const precio = document.getElementById('precio').value;

    const propiedadesFiltradas = <?php echo json_encode($propiedades); ?>.filter(function(propiedad) {
      if (ubicacion && propiedad.ubicacion.toLowerCase().indexOf(ubicacion.toLowerCase()) === -1) {
        return false;
      }
      if (habitaciones && parseInt(propiedad.habitaciones) !== parseInt(habitaciones)) {
        return false;
      }
      if (precio && parseInt(propiedad.precio) >= parseInt(precio)) {
        return false;
      }
      return true;
    });

    const propiedadContainer = document.querySelector('.propiedades-filtradas');
    propiedadContainer.scrollIntoView({behavior: 'smooth'});

    propiedadContainer.innerHTML = '';

    propiedadesFiltradas.forEach(function(propiedad) {
      if (propiedad.estado === 'vendido') {
        return;
      }

      const propiedadHtml = `
        <div class="col-md-6 col-lg-6 mb-4">
          <div class="card h-100">
            <img class="card-img-top img-fluid" src="img/${propiedad.imagen}" alt="Property Image">
            <div class="card-body">
              <h5 class="card-title">${propiedad.nombre}</h5>
              <p class="card-text" id="estado">Estado: <strong>${propiedad.estado}</strong></p>
              <p class="card-text" id="tipo">Tipo: ${propiedad.tipo}</p>
              <p class="card-text" id="ubicacion">Ubicación: ${propiedad.ubicacion}</p>
              <p class="card-text">Habitaciones: ${propiedad.habitaciones}</p>
              <p class="card-text">Baños: ${propiedad.baños}</p>
              <p class="card-text"><strong>Precio: $${propiedad.precio}</strong></p>
              <a href="detallePropiedad.php?p=${propiedad.imagen}" class="btn btn-primary">Más información</a>
            </div>
          </div>
        </div>
      `;

      propiedadContainer.insertAdjacentHTML('beforeend', propiedadHtml);
    });
  });
</script>


<?php
include "footer.php"
  ?>