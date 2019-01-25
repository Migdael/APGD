@extends('layouts.main')

@section('titulo', 'Editar tipo persona')
@section('tituloContenido', 'Editar')

@section('content')

<div class="x_content centrado">
    <div class="panel border-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="panel-title border bg-info rounded text-center tex-black mt-1 mb-1">
              Datos
          </div>

                {!! Form::open(['route' => ['tipos.update', $tipo], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
					{!! Form::text('tipo', $tipo->tipo, ['class' => 'form-control', 'placeholder' => 'Tipo de persona', 'required' ])!!}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
                </div>
                {!! Form::close() !!}
        
     
    </div>
</div>

@endsection
