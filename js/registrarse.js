document.querySelector("#btnRegistrarse").onclick=()=>{
    const datosRegistrarse = $("#registrarUsuario").serialize();
    console.log(datosRegistrarse);
    $.ajax({
    type: "post",
    url: `http://localhost/proyecto/api/scr/public/insertarUsuario?${datosRegistrarse}`,
    processData: false,
    contentType: false,
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      //instrucciones success
      console.log(res);
      if (res == "Insertado") {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Usuario registrado',
          showConfirmButton: false,
          timer: 1500
        })
      } else if (res == "Modificado") {
        Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'Usuario modificado',
          showConfirmButton: false,
          timer: 1500
        })
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'El usuario no se registró',
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
