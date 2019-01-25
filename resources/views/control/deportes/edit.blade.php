@extends('layouts.main')

@section('titulo', 'Editar Deporte')

@section('tituloContenido', 'Editar Deporte')

@section('content')
<div class="x_content centrado">
<div class="panel border-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="panel-title border bg-info rounded text-center tex-black mt-1 mb-1">
              Datos
          </div>
               
                {!! Form::open(['route' => ['deportes.update', $deporte], 'method' => 'PUT','files' =>true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name', $deporte->name, ['class' => 'form-control', 'placeholder' => 'Nombre del deporte', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('user_id', 'Entrenador') !!}
				{!! Form::select('user_id', $user, $deporte->User->id, ['class' => 'form-control', 'required' ] )!!}
                </div>

                <div class="form-group">
                 {!! Form::label('imagen', 'Imagen del deporte, Opcional') !!}
                    <input type="file" id="imagen"  accept=".jpg,.png" name="imagen">
                </div>
                <hr>
                <div class="form-group">
                    {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning',])!!}
                </div>
                {!! Form::close() !!}
   </div>
</div>
@endsection

