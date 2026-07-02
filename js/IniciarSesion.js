document.querySelector("#btnIniciarSesion").onclick = () => {
  let usuarios = parseInt(document.querySelector("#usuarioLogin").value);
  let claves = document.querySelector("#claveLogin").value;
  verificarUsuario(usuarios, claves);
}

function verificarUsuario(usr, contrasenia) {
  $.ajax({
    type: "get",
    url: `http://localhost/proyecto/api/scr/public/listaUsuarios`,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      let verificador = 0; 
      res.forEach(usuarioTabla => {
        if (verificador == 1) {
            console.log(usuarioTabla.id);
        } else {
          if (usuarioTabla.id == usr && usuarioTabla.clave == contrasenia) {
            if(usr == 213){
              verificador = 1;
            }else{
              verificador = 2;
            }
          } else {
            verificador = 3;
          }
        }
      });
      if (verificador == 1) {
        location.href = "seccionGeneral.php";
      } else if (verificador == 2) {
        location.href = "seccionUsuario.php";
      }else if(verificador == 3){
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Usuario o contraseña incorrecta',
          footer: '<a href="">Why do I have this issue?</a>'
        })
      }
    },
    error: function (xhr) {
      alert("Error al procesar la petición");
      console.log(xhr.statusText + xhr.responseText);
    },
    complete: function () {
      //document.querySelector(".cargando").style.visibility = "hidden";
    }
  });
}
