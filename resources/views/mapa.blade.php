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
    var map = L.map('map').setView([-33.4513,-70.6385], 12);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
    }).addTo(map);

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

    
    var ubicaciones = [
        { lat: -33.45694, lng: -70.64827, title: 'Ubicación 1', icon: 'img/C.rojo.png', content: mensaje1 },
        { lat: -33.5227, lng: -70.6007, title: 'Ubicación 2', icon: 'img/C.amarillo.png', content: mensaje3 },
        { lat: -33.4500, lng: -70.6336, title: 'Ubicación 3', icon: 'img/C.verde.png', content: mensaje2 },
        { lat: -33.4939, lng: -70.6246, title: 'Ubicación 4', icon: 'img/C.amarillo.png', content: mensaje3 },
        { lat: -33.5209, lng: -70.7519, title: 'Ubicación 5', icon: 'img/C.rojo.png', content: mensaje1 },
        { lat: -33.5924, lng: -70.6274, title: 'Ubicación 6', icon: 'img/C.verde.png', content: mensaje2 },
        { lat: -33.4575, lng: -70.6783, title: 'Ubicación 7', icon: 'img/C.verde.png', content: mensaje2 },
        { lat: -33.4929, lng: -70.5990, title: 'Ubicación 8', icon: 'img/C.verde.png', content: mensaje2 },
        { lat: -33.4166, lng: -70.5927, title: 'Ubicación 9', icon: 'img/C.amarillo.png', content: mensaje3 },
        { lat: -33.5686, lng: -70.6761, title: 'Ubicación 10', icon: 'img/C.rojo.png', content: mensaje1 }
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

        marker.bindPopup(ubicacion.content).openPopup();
    });
</script>

<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>


@endsection
