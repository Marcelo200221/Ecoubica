@extends('layouts.general')
@section('content')

<img src="{{ asset('img/eslogan.png') }}" alt="" width="2000" height="500">
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

@endsection
 

