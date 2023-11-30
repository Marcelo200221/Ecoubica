@extends('layouts.general')
@section('content')



<main>
    <section class="py-5 text-center container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card text-left mt-3">
            <div class="card-body">

              <h2>Iniciar Sesion</h2>
              @if(Auth::check())
                <label for="">¡¡Ya estás logueado!!</label>
                <a href="{{route('welcome')}}" type="button" class="btn btn-primary">Volver</a>
              @else
              <form action="{{route('inicia-sesion')}}" method="POST">
                @csrf
               
                  <img src="{{ asset('img/eco.png') }}" width="150" alt="">
                  <div class="mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="email" placeholder="Email">
                  </div>
                  <div class="mb-3">
                      <label for="correo" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="current-password">
                  </div>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Iniciar</button>
                  </div>
              </form>
              @endif

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection