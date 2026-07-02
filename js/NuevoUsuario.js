if (sessionStorage.getItem("id") != null) {
  Swal.fire('Estas modificando un usuario');
  var id = sessionStorage.getItem("id");
  getUsuario(id);
  sessionStorage.clear();
} else {
  var id = -1;
}



document.querySelector("#guardarUsuario").onclick = () => {
  const datos = $("#frmnuevoUsuario").serialize();
  if (id > -1) {
    tipoPeticion = "put";
    urlPeticion = `http://localhost/proyecto/api/scr/public/modificarUsuario?${datos}&id=${id}`
  } else {
    tipoPeticion = "post"
    urlPeticion = `http://localhost/proyecto/api/scr/public/insertarUsuario?${datos}`
  }
  $.ajax({
    type: tipoPeticion,
    url: urlPeticion,
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
          title: 'Usuario insertado',
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
          text: 'El usuario no se insertó',
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


function getUsuario(id) {

  $.ajax({
    type: "get",
    url: `http://localhost/proyecto/api/scr/public/listaUsuariosi/${id}`,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      //instrucciones success
      document.querySelector("#id").value = res.id;
      document.querySelector("#clave").value = res.clave;
      document.querySelector("#nombre").value = res.nombre;
      document.querySelector("#apellido1").value = res.apellido1;
      document.querySelector("#apellido2").value = res.apellido2;
      document.querySelector("#correo").value = res.correo;
      document.querySelector("#fechaNacimiento").value = res.fechaNacimiento;
      document.querySelector("#telefono").value = res.telefono;
      document.querySelector("#email").value = res.email;
      document.querySelector("#whatsapp").value = res.whatsapp;
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


/*<div class="col-auto">
            <input type="file" name="imagen" id="imagen" class="form-control" placeholder="placa"
                aria-labelledby="passwordHelpInline">
</div>*/
