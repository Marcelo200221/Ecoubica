@extends('layouts.general')
@section('content')
<div class="row justify-content-center">
        <div class="col-md-3">
          <div class="card text-left mt-3">
            <div class="card-body">
              
            <h5 class="card-title">Nuevo libro</h5>
            <form action="{{route('nuevoLibro')}}" method="post">
              @csrf
              <div class="libro">
                <label for="">Titulo</label>
                <input class="form-control" type="text" name="name">
                <label for="">Ingrese el libro en formato PDF</label>
                <input class="form-control" type="file" name="libro">
              </div>
              <button class="btn btn-danger" type="submit">Ingresar</button>
            </form>
            </div>
          </div>
        </div>
      </div>
@endsection