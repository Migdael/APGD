@extends('layouts.main')

@section('titulo', 'Editar institucion')

@section('tituloContenido', 'Editar Institucion')

@section('content')
<div class="x_content centrado">
    <div class="panel border-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="panel-title border bg-info rounded text-center tex-black mt-1 mb-1">
              Datos
          </div>

               
                {!! Form::open(['route' => ['instituciones.update', $institucion], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre') !!}
					{!! Form::text('nombre', $institucion->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre de la institucion', 'required' ])!!}
                </div>

                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
                    {!! Form::select('tipo', ['universidad' => 'Universidad', 'colegio' => 'Colegio', 'otro' => 'Otro'],$institucion->tipo,['class' => 'form-control'])!!}
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
                </div>
                {!! Form::close() !!}
   </div>
</div>
@endsection
