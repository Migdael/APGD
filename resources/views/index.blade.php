@extends('layouts.main')

@section('titulo','Inicio')
@section('tituloContenido','Disciplinas Deportivas')
@section('content')


<div class="row col-md-12">
@foreach ($deportes as $deporte)
  <div class="col-md-3">
    <div class="thumbnail @if (Auth::user() -> name == $deporte -> user->name)
      colorMarca
    @endif">
      <div class="image view view-first">
        <img style="width: 100%; display: block;" src="/imagenes/deportes/{{$deporte->imagen}}" alt="image" />
        <div class="mask colorMarca">
          <p>{{ $deporte -> count() }} Miembros</p>
            <div class="tools tools-bottom">
            <a href="Componentes/main"><i class="fa fa-share"></i></a>
          </div>
          </div>
      </div>
      <div class="caption">
        <p class="text-center">Deporte: {{ $deporte -> name }}</p>
        <p class="text-center">Entrenador: {{ $deporte -> user->name }}</p>
      </div>
     </div>
  </div>
@endforeach
 </div>
                      

      <div>
        {!! $deportes -> render() !!}
      </div>

@endsection
