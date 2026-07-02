obtenerUsuario(213);

document.querySelector("#btnActualizar").onclick = () => {
  let id2 = document.querySelector("#idUsuario").value;
  $.ajax({
    type: "get",
    url: `http://localhost/proyecto/api/scr/public/listaUsuarios`,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      //instrucciones success
      console.log(res);
      res.forEach(usuario => {
        if (id2 == usuario.id) {
          location.href = "actualizarDatos.php";
        }
      });
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






function obtenerUsuario(id) {
  $.ajax({
    type: "get",
    url: `http://localhost/proyecto/api/scr/public/listaUsuariosi/${id}`,
    dataType: "JSON",
    beforeSend: function () {
      //document.querySelector(".cargando").style.visibility = "visible"; 
    },
    success: function (res) {
      //instrucciones success
      console.log(res);
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
