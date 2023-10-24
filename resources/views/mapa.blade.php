<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecoubica</title>
    <link rel="shortcut icon" href="{{ asset('img/Logo2(1).png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
    body {
        background-color: #A0FFBD;
    }

    .svg-icon {
        width: 40px;
        height: 40px;
    }

    .color-enlace-personalizado {
        color: #FFFFFF;
    }

    #map {
        height: 600px;
        width: 70%;
        margin: 20px auto 0;
    }
    </style>
</head>
<body>

<header>
    <div class="navbar navbar-dark bg-success shadow-sm">
        <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('img/re.svg') }}" alt="" class="svg-icon">
                <strong>Ecoubica</strong>
            </a>
            <ul class="nav nav-underline">
                <li class="nav-item">
                    <a class="nav-link color-enlace-personalizado" aria-current="page" href="/">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-enlace-personalizado" href="/login">Registro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-enlace-personalizado" href="singin">Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link color-enlace-personalizado" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</header>

<div id="map"></div>
<img id="image" src="img/re.svg" style="display: none;"> <!-- Oculta la imagen -->

<script>
    function initMap() {
        var ubicacion = {lat: -33.45694, lng: -70.64827};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
            center: ubicacion
        });

        // Obtiene el elemento <img> por su id
        var image = document.getElementById('image');

        // Convierte la imagen en un icono personalizado
        var iconoPersonalizado = {
            url: image.src, // Utiliza la URL de la imagen cargada
            size: new google.maps.Size(30, 30), // Tamaño del icono
            scaledSize: new google.maps.Size(30, 30) // Tamaño escalado
        };

        var marker = new google.maps.Marker({
            position: ubicacion,
            map: map,
            title: 'Ubicación',
            icon: iconoPersonalizado
        });
    }
</script>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmzxktL-ApQe9WO-ZSSk-CtypQuN_QwEc&callback=initMap"></script>

</body>
</html>
