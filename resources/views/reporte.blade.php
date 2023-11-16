@extends('layouts.general')
@section('content')
<link href="{{asset('css/reporte.css')}}" rel="stylesheet">

<section class="py-5 text-center container" id="container">
    <div class="card mx-auto my-auto" style="width: 18rem;">
        <h1>Reporte</h1>
        <div class="card-body">
                <form action="{{route('envioRepo')}}" method="post">
                    @csrf
                    <div>
                        <label for="">Titulo reporte:</label>
                        <select name="title" id="title">
                            <option value="default" selected disabled>Seleccione un tipo de reporte</option>
                            <option value="Reporte de mal estado">Reporte de mal estado</option>
                            <option value="Sugerir nuevo punto verde">Sugerir punto verde</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Mensaje:</label>
                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                    </div>
                    <button onClick="enviarReporte()" class='btn btn-primary' type='submit'>Enviar</button>
                </form>
        </div>
    </div>
</section>
@endsection