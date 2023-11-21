@extends('layouts.general')
@section('content')
<div class="row justify-content-center">
        @foreach($libros as $libro)
        <div class="col-md-3">
        
          <div class="card text-left mt-3">
            <div class="card-body">
              
            <h5 class="card-title">{{$libro->name}}</h5>
            <p class="card-text">{{$libro->libro}}</p>
            <form action="{{route('nuevoLibro')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="libro">
                <a type="button" class="btn btn-danger" href="{{route('descargar-libro', $libro->name)}}">Descargar</a>
              </div>

              @if(Auth::user()->role === 'admin')
              @csrf
              @method('DELETE')
              <div class="libro">
                <a type="button" class="btn btn-primary" href="{{route('eliminar-libro', $libro->name)}}">Eliminar</a>
              </div>
              @endif
              
            </form>
            </div>
          </div>
        </div>
        @endforeach
      </div>
@endsection