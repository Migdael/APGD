@extends('layouts.main')

@section('titulo', 'Editar Usuario')
@section('tituloContenido', 'Editar Usuario')

@section('content')

<div class="x_content centrado">
   <div class="panel border-info col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="panel-title border bg-info rounded text-center tex-black mt-1 mb-1">
              Datos
          </div>
   
                
                {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nombre') !!}
					{!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Correo Electronico') !!}
					{!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'Ejemplo@gmail.com', 'required' ])!!}
                </div>
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo') !!}
					{!! Form::select('tipo', [ '' => 'Seleccione un nivel..', 'miembro' => 'Miembro', 'administrador' => 'Administrador'],$user->tipo,['class' => 'form-control'])!!}
                </div>

              <hr>
                <div class="form-group">
                    {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning'])!!}
                </div>
                {!! Form::close() !!}

</div>
</div>
@endsection
