@extends('layouts.general')
@section('content')
<div class="row justify-content-center">
        @foreach($libros as $libro)
        <div class="col-md-3">
        
          <div class="card text-left mt-3">
            <div class="card-body">
              
            <h5 class="card-title">{{$libro->name}}</h5>
            <form action="{{route('leerLibro',  ['name' => $libro->name])}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="libro">
                <input class="card-text" name="nombreLibro" value="{{$libro->libro}}">
                <a type="button" class="btn btn-danger" href="{{route('leerLibro', ['name' => $libro->name])}}">Leer</a>
              </div>
            </form>
            @if(Auth::user()->role === 'admin')
              <form action="{{ route('eliminar-libro', ['name' => $libro->name]) }}" method="post" enctype="multipart/form-data">
                 @csrf
                @method('DELETE')
                <div class="libro">
                    <a type="submit" class="btn btn-primary">Eliminar</a>
                </div>
              </form>
            @endif
            </div>
          </div>
        </div>
        @endforeach
      </div>
@endsection