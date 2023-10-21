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
    color: #FFFFFF; /* Cambia este valor al color deseado */
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
    <a class="nav-link active color-enlace-personalizado" aria-current="page" href="#">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-enlace-personalizado" href="#">Registro</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-enlace-personalizado" href="#">Ingresar</a>
  </li>
  <li class="nav-item">
    <a class="nav-link color-enlace-personalizado" href="#">Contacto</a>
  </li>
</ul>
    </div>
  </div>
</header>

<img src="{{ asset('img/eslogan.png') }}" alt="" width="1500" height="500">


<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="mb-1">Proyecto creado para el ramo de arquitectura 2023 Duoc UC San Joaquin, todos los derechos reservados</p>
    <p class="mb-1">Proyecto creado por GreenCode.</p>
  </div>
</footer>
    
</body>
</html>
