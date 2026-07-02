/*document.querySelector("#datosTabla").addEventListener('click', (e) => {
  if (e.target.classList.contains('btn-warning') ||
    e.target.classList.contains('fa-pencil-alt')) {
    let fila2 = e.target.closest("tr");
    let idFila2 = fila2.childNodes[1].innerHTML;
    sessionStorage.setItem("id", idFila2);
    location.href = "nuevoUsuario.php";

    // alert("modificar");
    Swal.fire({
      title: 'Estas seguro que quieres modificar este usuario',
      text: "Los datos serian reemplazados",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          type: "put",
          url: `http://localhost/proyecto/api/scr/public/modificarUsuario`,
          dataType: "JSON",
          beforeSend: function () {
            //document.querySelector(".cargando").style.visibility = "visible"; 
          },
          success: function (res) {
            //instrucciones success
            console.log(res);
            let fila2 = e.target.closest("tr");
            let idFila2 = fila2.childNodes[1];
            let filas = "";
            
            document.querySelector("#datosTabla").innerHTML = filas;
          },
          error: function (xhr) {
            alert("Error al procesar la petición");
            console.log(xhr.statusText + xhr.responseText);
          },
          complete: function () {
            //document.querySelector(".cargando").style.visibility = "hidden";
          }
        });
        Swal.fire(
          'Datos reemplazados',
          'Los datos del usuario se reemplazaron',
          'success'
        )
      }
    })
  } else if (e.target.classList.contains('btn-danger') ||
    e.target.classList.contains('fa-trash-alt')) {
    //alert("eliminar");
    Swal.fire({
      title: 'Estas seguro que quieres eliminar este usuario?',
      text: "Los datos serian borrados",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si'
    }).then((result) => {
      if (result.isConfirmed) {
        let fila = e.target.closest("tr");
        let idFila = fila.childNodes[1].innerHTML;
        $.ajax({
          type: "delete",
          url: `http://localhost/proyecto/api/scr/public/eliminarUsuario/${idFila}`,
          beforeSend: function () {
            //document.querySelector(".cargando").style.visibility = "visible"; 
          },
          success: function (res) {
            //instrucciones success
            cargarTabla();
            Swal.fire(
              'Datos borrados',
              'Los datos del usuario se borraron',
              'success'
            )
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
    })
  }

})*/
cargarTablaPropiedades();

let variable = "nose";
function cargarTablaPropiedades() {
  document.querySelector("#datosTablaPropiedades").innerHTML = "";
  propiedades.forEach(propiedad => {
    console.log(propiedad);
    console.log(variable);
    let filasPropiedades = filasPropiedades + `
                    <tr>
                        <td scope="col">${propiedad.id}</td>
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
    
    `
    document.querySelector("#datosTablaPropiedades").innerHTML = filasPropiedades;
  });


}
