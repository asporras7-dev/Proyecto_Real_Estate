<footer>

    <footer class="bg-dark text-light">
        <div class="container justify-content-center">
            <div class="row">
                <div class="col-md-6">
                    <h5>Iniciar sesión o registrarse</h5>
                    <form>
                        <div class="form-group">
                            <label for="inputEmail">Correo electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="ejemplo@ejemplo.com">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                        <a href="crearcuenta.php" class="btn btn-primary">Registrarse</a>
                    </form>
                </div>
                <div class="col-md-6">
                    <h5>Síguenos en redes sociales</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item imgcolor"><a href="https://www.instagram.com/"><img src="img/ig.png"
                                    alt="Instagram Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://www.facebook.com/"><img src="img/fb.png"
                                    alt="Facebook Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/"><img src="img/tw.png"
                                    alt="Twitter Logo" width="50"></a></li>
                        <li class="list-inline-item"><a href="https://www.youtube.com/"><img src="img/yt.png"
                                    alt="Youtube Logo" width="50"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</footer>



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
<script src="js/listaUsuarios.js"></script>
<script src="js/nuevoUsuario.js"></script>
<script src="js/listaPropiedades.js"></script>
<script src="js/registrarse.js"></script>
<?php
//if (strcmp($url[0], "registrarse") == 0) {
  // echo '<script src="js/registrarse.js"></script>';
//} 
//else if (strcmp($url[0], "listaUsuarios") == 0) {
   // echo '<script src="js/listaUsuarios.js"></script>';<script src="js/nuevoUsuario.js"></script>
//}



?>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>
</body>


</html>