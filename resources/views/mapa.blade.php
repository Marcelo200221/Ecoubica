@extends('layouts.general')
@section('content')

<style>
    #map {
        height: 600px;
        width: 70%;
        margin: 20px auto 0;
    }
    .leaflet-control-geocoder.leaflet-bar {
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        width: 300px;
    }

    .leaflet-control-geocoder-form {
        width: 100%;
    }

    .leaflet-control-geocoder-form input[type="text"] {
        width: 100%;
        padding: 8px;
        border: none;
        border-bottom: 1px solid #ccc;
    }

    .leaflet-control-geocoder-form button {
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 8px 12px;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<h1 class="text-center mt-4">Mapa de Ubicaciones Ecoubica</h1>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script>
<<<<<<< Updated upstream
    var map;
    var image;
    var marker1, marker2, marker3, marker4, marker5, marker6, marker7, marker8, marker9, marker10;
    var mensaje1 = `<div>
                        <h3>Punto Verde Deshabilitado</h3>
                        <a href="{{route('reporte')}}" class="btn btn-danger">Reportar</a>
                      </div>`;
    var mensaje2 = `<div>
                        <h3>Punto Verde Habilitado</h3>
                        <a href="{{route('reporte')}}" class="btn btn-danger">Reportar</a>
                      </div>`;
    var mensaje3 = `<div>
                        <h3>Punto Verde en mantención</h3>
                        <a href="{{route('reporte')}}" class="btn btn-danger">Reportar</a>
                      </div>`
=======
    var map = L.map('map').setView([-33.4513,-70.6385], 12);
>>>>>>> Stashed changes

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

    
    var ubicaciones = [
        { lat: -33.45694, lng: -70.64827, title: 'Ubicación 1', icon: 'img/C.rojo.png', content: 'Punto Verde Deshabilitado' },
        { lat: -33.5227, lng: -70.6007, title: 'Ubicación 2', icon: 'img/C.amarillo.png', content: 'Punto Verde en Mantención' },
        { lat: -33.4500, lng: -70.6336, title: 'Ubicación 3', icon: 'img/C.verde.png', content: 'Punto Verde Habilitado' },
        { lat: -33.4939, lng: -70.6246, title: 'Ubicación 4', icon: 'img/C.amarillo.png', content: 'Punto Verde en Mantención' },
        { lat: -33.5209, lng: -70.7519, title: 'Ubicación 5', icon: 'img/C.rojo.png', content: 'Punto Verde Deshabilitado' },
        { lat: -33.5924, lng: -70.6274, title: 'Ubicación 6', icon: 'img/C.verde.png', content: 'Punto Verde Habilitado' },
        { lat: -33.4575, lng: -70.6783, title: 'Ubicación 7', icon: 'img/C.verde.png', content: 'Punto Verde Habilitado' },
        { lat: -33.4929, lng: -70.5990, title: 'Ubicación 8', icon: 'img/C.verde.png', content: 'Punto Verde Habilitado' },
        { lat: -33.4166, lng: -70.5927, title: 'Ubicación 9', icon: 'img/C.amarillo.png', content: 'Punto Verde en Mantención' },
        { lat: -33.5686, lng: -70.6761, title: 'Ubicación 10', icon: 'img/C.rojo.png', content: 'Punto Verde Deshabilitado' }
    ];
    
    ubicaciones.forEach(function (ubicacion) {
        var marker = L.marker([ubicacion.lat, ubicacion.lng], {
            icon: L.icon({
                iconUrl: ubicacion.icon,
                iconSize: [30, 30],
                iconAnchor: [15, 30],
                popupAnchor: [0, -30]
            })
        }).addTo(map);

<<<<<<< Updated upstream
        var infoWindow1 = new google.maps.InfoWindow({
            content: mensaje1
        });

        var infoWindow2 = new google.maps.InfoWindow({
            content: mensaje3
        });

        var infoWindow3 = new google.maps.InfoWindow({
            content: mensaje2
        });

        var infoWindow4 = new google.maps.InfoWindow({
            content: mensaje3
        });

        var infoWindow5 = new google.maps.InfoWindow({
            content: mensaje1
        });

        var infoWindow6 = new google.maps.InfoWindow({
            content: mensaje2
        });

        var infoWindow7 = new google.maps.InfoWindow({
            content: mensaje2
        });

        var infoWindow8 = new google.maps.InfoWindow({
            content: mensaje2
        });

        var infoWindow9 = new google.maps.InfoWindow({
            content: mensaje3
        });

        var infoWindow10 = new google.maps.InfoWindow({
            content: mensaje1
        });

        marker1 = new google.maps.Marker({
            position: ubicacion1,
            map: map,
            title: 'Ubicación 1',
            icon: {
                url: 'img/C.rojo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker2 = new google.maps.Marker({
            position: ubicacion2,
            map: map,
            title: 'Ubicación 2',
            icon: {
                url: 'img/C.amarillo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker3 = new google.maps.Marker({
            position: ubicacion3,
            map: map,
            title: 'Ubicación 3',
            icon: {
                url: 'img/C.verde.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker4 = new google.maps.Marker({
            position: ubicacion4,
            map: map,
            title: 'Ubicación 4',
            icon: {
                url: 'img/C.amarillo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker5 = new google.maps.Marker({
            position: ubicacion5,
            map: map,
            title: 'Ubicación 5',
            icon: {
                url: 'img/C.rojo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker6 = new google.maps.Marker({
            position: ubicacion6,
            map: map,
            title: 'Ubicación 6',
            icon: {
                url: 'img/C.verde.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker7 = new google.maps.Marker({
            position: ubicacion7,
            map: map,
            title: 'Ubicación 7',
            icon: {
                url: 'img/C.verde.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker8 = new google.maps.Marker({
            position: ubicacion8,
            map: map,
            title: 'Ubicación 8',
            icon: {
                url: 'img/C.verde.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker9 = new google.maps.Marker({
            position: ubicacion9,
            map: map,
            title: 'Ubicación 9',
            icon: {
                url: 'img/C.amarillo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker10 = new google.maps.Marker({
            position: ubicacion10,
            map: map,
            title: 'Ubicación 10',
            icon: {
                url: 'img/C.rojo.png',  
                size: new google.maps.Size(30, 30),  
                scaledSize: new google.maps.Size(30, 30) 
            }
        });

        marker1.addListener('click', function() {
            infoWindow1.open(map, marker1);
        });

        marker2.addListener('click', function() {
            infoWindow2.open(map, marker2);
        });

        marker3.addListener('click', function() {
            infoWindow3.open(map, marker3);
        });

        marker4.addListener('click', function() {
            infoWindow4.open(map, marker4);
        });

        marker5.addListener('click', function() {
            infoWindow5.open(map, marker5);
        });

        marker6.addListener('click', function() {
            infoWindow6.open(map, marker6);
        });

        marker7.addListener('click', function() {
            infoWindow7.open(map, marker7);
        });

        marker8.addListener('click', function() {
            infoWindow8.open(map, marker8);
        });

        marker9.addListener('click', function() {
            infoWindow9.open(map, marker9);
        });

        marker10.addListener('click', function() {
            infoWindow10.open(map, marker10);
        });
    }
=======
        marker.bindPopup(ubicacion.content).openPopup();
    });
>>>>>>> Stashed changes
</script>

<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


@endsection
