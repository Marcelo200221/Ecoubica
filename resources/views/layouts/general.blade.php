<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecoubica</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
          <a class="nav-link color-enlace-personalizado" href="/">Inicio</a>
        </li>
        @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link color-enlace-personalizado" href="{{route('logout')}}">Cerrar Sesion</a>
          </li>
          @if(Auth::user()->role === 'admin')
          <li class="nav-item">
            <a class="nav-link color-enlace-personalizado" href="{{route('verReportes')}}">Ver reportes</a>
          </li>
          @endif
        @else
          <li class="nav-item">
            <a class="nav-link color-enlace-personalizado" href="/login">Ingresar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link color-enlace-personalizado" href="singup">Registrarse</a>
          </li>
        @endif
        <li class="nav-item">
          <a class="nav-link color-enlace-personalizado" href="#">Contacto</a>
        </li>
        
      </ul>
    </div>
  </div>
</header>



@yield('content')->@section('content')

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
