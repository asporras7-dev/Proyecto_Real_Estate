document.querySelector("#btnActualizarDatos").onclick = () => {
  let datosUsuario = $("#frmActualizarDatos").serialize();
  console.log(768325);
  let id = 213;
  $.ajax({
    type: "put",
    url: `http://localhost/proyecto/api/scr/public/modificarUsuario?${datosUsuario}&id=${id}`,
    processData: false,
    contentType: false,
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      //instrucciones success
      Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'Datos actualizados correctamente',
        showConfirmButton: false,
        timer: 1500
      })
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
