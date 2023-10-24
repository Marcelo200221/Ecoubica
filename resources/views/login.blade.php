<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecoubica</title>
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
          <a class="nav-link color-enlace-personalizado" aria-current="page" href="/">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active color-enlace-personalizado" href="login">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-enlace-personalizado" href="/singin">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link color-enlace-personalizado" href="#">Contacto</a>
        </li>
      </ul>
    </div>
  </div>
</header>



<main>
    <section class="py-5 text-center container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card text-left mt-3">
            <div class="card-body">

              <h2>Registrarse</h2>
              <pre>{{ Auth::user() }}</pre>

              <form action="" method="POST">
                @csrf
               
                  <img src="{{ asset('img/eco.png') }}" width="150" alt="">
                  <div class="mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Email">
                  </div>
                  <div class="mb-3">
                      <label for="correo" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="current-password">
                  </div>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                  </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>

</body>
</html>