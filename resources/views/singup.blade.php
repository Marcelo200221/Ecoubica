

@extends('layouts.general')
@section('content')
<section class="py-5 text-center container">
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card text-left mt-3">
            <div class="card-body">
              {{-- <h4 class="card-title">Title</h4>
              <p class="card-text">Body</p> --}}


              <h2>Iniciar sesión</h2>

              @if($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <form action="{{route('validar-registro')}}" method="POST">
                  @csrf
                  <img src="{{ asset('img/eco.png') }}" width="150" alt="">
                  <div class="mb-3">
                      <label for="usuario" class="form-label">Usuario</label>
                      <input type="text" class="form-control" id="usuario" name="name" value="Ecoubica">
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email" value="ecoubica@gmail.com">
                  </div>
                  <div class="mb-3">
                      <label for="correo" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="password" name="password" value="admin">
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
@endsection