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
          <a class="nav-link active color-enlace-personalizado" aria-current="page" href="/">Inicio</a>
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

<img src="{{ asset('img/eslogan.png') }}" alt="" width="1500" height="500">

<section class="py-5 text-center container">
    <div class="row">
      <div class="col">
        <h1 class="fw-light">Ecoubica y su compromiso </h1>
        <p class="lead text-body-secondary">En Santiago, al igual que en muchas otras áreas urbanas, existe una necesidad crítica de conocer el estado y disponibilidad de puntos verdes y lugares de reciclaje. Actualmente, en las comunas, existen numerosos puntos verdes de reciclaje, pero se desconoce su estado: si están en funcionamiento, dañados, en desuso o simplemente ya no existen. Esta falta de información dificulta la eficiencia de los esfuerzos en materia de reciclaje y sostenibilidad, impidiendo a los ciudadanos tomar decisiones informadas sobre cómo y dónde reciclar adecuadamente. La plataforma Ecoubica se presenta como una solución que puede ayudar a abordar este problema, permitiendo a los usuarios conocer el estado de los puntos verdes y promoviendo prácticas sostenibles en la comuna de Santiago y más allá.</p>
        <p>
          <a href="/mapa" class="btn btn-secondary btn-lg my-3">Ir al mapa</a>
        </p>
      </div>
    </div>
  </section>

  <div class="container col">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="{{ asset('img/eco.png') }}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="350" height="350" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis">La solución que aborda tus necesidades en esta problemática</h1>
        <p class="lead">Ecoubica: La app para ciudadanos comprometidos. Encuentra puntos clave, gestiona mejoras y colabora para un mundo más sostenible.</p>
      </div>
    </div>
  </div>

<footer class="text-body-primary py-3" style="background-color: #198754;">
  <div class="container">
    <p class="mb-1">Proyecto creado para el ramo de arquitectura 2023 Duoc UC San Joaquin, todos los derechos reservados</p>
    <p class="mb-1">Proyecto creado por GreenCode.</p>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    
</body>
</html>
