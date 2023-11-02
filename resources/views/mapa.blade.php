@extends('layouts.general')
@section('content')

<style>
    #map {
    height: 600px;
    width: 70%;
    margin: 20px auto 0;
    }
</style>


<h1 class="text-center mt-4">Mapa de Ubicaciones Ecoubica</h1>
    <div id="map"></div>

<div id="map"></div>

<script>
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

    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: {lat: -33.45694, lng: -70.64827},
            styles: [
                {
                    featureType: "poi",
                    elementType: "labels",
                    stylers: [{ visibility: "off" }]
                },
                {
                    featureType: "transit",
                    elementType: "labels",
                    stylers: [{ visibility: "off" }]
                }
            ]
        });

        var ubicacion1 = {lat: -33.45694, lng: -70.64827};
        var ubicacion2 = {lat: -33.5227, lng: -70.6007};
        var ubicacion3 = {lat: -33.4500, lng: -70.6336};
        var ubicacion4 = {lat: -33.4939, lng: -70.6246};
        var ubicacion5 = {lat: -33.5209, lng: -70.7519};
        var ubicacion6 = {lat: -33.5924, lng: -70.6274};
        var ubicacion7 = {lat: -33.4575, lng: -70.6783};
        var ubicacion8 = {lat: -33.4929, lng: -70.5990};
        var ubicacion9 = {lat: -33.4166, lng: -70.5927};
        var ubicacion10 = {lat: -33.5686, lng: -70.6761};

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
</script>


<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzxktL-ApQe9WO-ZSSk-CtypQuN_QwEc&callback=initMap"></script>
@endsection

