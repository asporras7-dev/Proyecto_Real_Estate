
cargarMapa([9.748917, -83.753428], 7);
function cargarMapa(coordenadas, zoom) {
  //document.querySelector("#fieldMapa").innerHTML = `<legend>Mapa</legend>
    //    <div id="mapaEmpresa" style="width: 500px; height: 400px"></div>`;
  var mapa = L.map('mapaEmpresa').setView(coordenadas, zoom);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'Token mapbox ocultado por seguridad'
  }).addTo(mapa);

  L.marker([9.994995, -84.125018]).addTo(mapa)
    .bindPopup('<img src="oficinaRealEstate.jpg" alt="local de Solutions Real Estate" width="1"></img> <br> Solutions Real Estate <br> 200 metros oeste de Gas Express, San Franscisco, Heredia <br>Telefono: 84639201')
    .openPopup();

  L.marker([9.960491, -84.078411]).addTo(mapa)
    .bindPopup('<img src="oficinaRalEstate.jpg" alt="local 2 de Solutions Real Estate" width="3"></img> <br> Solutions Real Estate <br> 150 metros sur del parque de San Juan de Tibas, Tibas, San Jose <br> Telefono: 76384472')
    .openPopup();

  L.marker([9.933496, -84.082020]).addTo(mapa)
    .bindPopup('<img src="oficinaRealEstate3.jpg" alt="local 3 de Solutions Real Estate" width="3"></img> <br> Solutions Real Estate <br> 450 metros este del parque Brauilo Carrillo Colina, San Jose, San Jose <br> Telefono: 73620791')
    .openPopup();
}



//pk.eyJ1IjoicnNlcXVlaXJhIiwiYSI6ImNraDByOWZrdjB6ejYyd3BncjM5a2s5ZWgifQ.BKZKvJugnbvE3Pi8PeP4Jw