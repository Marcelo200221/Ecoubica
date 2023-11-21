@extends('layouts.general')
@section('content')
<body>
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

    <section class="py-5 text-center container">
      @if($reportes && count($reportes) > 0)
        @foreach ($reportes as $reporte)
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="card text-left mt-3">
              <div class="card-body">
                
              <h5 class="card-title">{{$reporte->title}}</h5>
              <p class="card-text">{{$reporte->message}}</p>
              <form action="{{route('eliminar-reporte', ['id' => $reporte->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Rechazar</button>
              </form>
              <form action="{{route('validar-reporte', ['id' => $reporte->id])}}" method="post">
                @csrf
                @method('PUT')
                <button type="submit" class="btn btn-primary">Validar</button>
              </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      @else
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="card text-left mt-3">
              <div class="card-body">
              <h5 class="card-title">No hay reportes</h5>
              </div>
            </div>
          </div>
        </div>
      @endif
    </section>
</body>
@endsection