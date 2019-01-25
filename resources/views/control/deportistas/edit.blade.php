@extends('layouts.main')

@section('titulo', 'Editar Deporte')

@section('tituloContenido', 'Editar Deportista')

@section('content')


   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

               
                {!! Form::open(['route' => ['deportistas.update', $deportista], 'method' => 'PUT','files' =>true]) !!}
                 <div class="panel border-info">
        <div class="panel-body badge-light">

            <div class="panel border-info">
                <div class="panel-title bg-info rounded text-center">
                    <p class="ml-1">
                        Datos Generales
                    </p>
                </div>
                <div class="panel-body pt-1">
                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-3 col-xs-12">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre',$deportista -> nombre, ['class' => 'form-control', 'placeholder' => 'Nombre ...', 'required' ])!!}
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12">
                            {!! Form::label('apellido', 'Apellido') !!}
                            {!! Form::text('apellido',$deportista -> apellido, ['class' => 'form-control', 'placeholder' => 'Apellido ...', 'required' ])!!}
                        </div>
                        <div class="form-group col-md-2 col-sm-2 col-xs-12">
                            <label>Sexo</label>
                            <div class="form-control">
                                <input checked="" class="ml-2" id="sexo" name="sexo" type="radio" value="F"> F </input>
                                <input class="ml-4" id="sexo" name="sexo" type="radio" value="M"> M </input>
                            </div>
                        </div>
                        <div class="form-group col-md-1 col-sm-1 col-xs-12">
                            {!! Form::label('edad', 'Edad') !!}
                            {!! Form::number('edad',$deportista -> edad, ['class' => 'form-control', 'placeholder' => 'Edad', 'required'])!!}
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12">
                            {!! Form::label('fechaNacimiento', 'Fecha de Nacimiento') !!}
                            {!! Form::Date('fechaNacimiento',$deportista -> fechaNacimiento, ['class' => 'form-control', 'id' => 'calendario', 'placeholder' => 'Numero de cédula', 'required' ])!!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2 col-sm-2 col-xs-12">
                            {!! Form::label('telefono', 'Teléfono') !!}
                            {!! Form::number('telefono',$deportista -> telefono, ['class' => 'form-control', 'placeholder' => 'Numero de teléfono ...'])!!}
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12">
                            {!! Form::label('cedula', 'N° Cédula') !!}
                            {!! Form::text('cedula',$deportista -> cedula, ['class' => 'form-control', 'placeholder' => 'Numero de cédula, opcional'])!!}
                        </div>
                        <div class="form-group col-md-2 col-sm-2 col-xs-12">
                            {!! Form::label('deporte_id', 'Deporte') !!}
                            {!! Form::select('deporte_id', $deportes, $deportista->deporte->id, ['class' => 'form-control','placeholder' => 'Seleccione ...', 'required' ] )!!}
                        </div>
                        <div class="form-group col-md-2 col-sm-2 col-xs-12">
                            {!! Form::label('nivel', 'Nivel') !!}
                            {!! Form::select('tipo_id', $tipos, $deportista->tipo->id, ['class' => 'form-control','placeholder' => 'Seleccione ...','id' => 'selectTipo', 'required'] )!!}
                        </div>
                        <div class="form-group col-md-3 col-sm-3 col-xs-12">
                            {!! Form::label('institucion_id', 'Centro de estudio') !!}
                            {!! Form::select('institucion_id', $instituciones, $deportista->institucion->id, ['class' => 'form-control','placeholder' => 'Seleccione...', 'required' ] )!!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label>Dirección</label>
                            {!! Form::text('direccion',$deportista -> direccion, ['class' => 'form-control', 'placeholder' => 'Dirección... Opcional' ])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="panel border-info col-md-7 col-sm-7 col-xs-12">
                    <div class="panel-title mt-1 bg-info rounded text-center">
                        <p class="ml-1">
                            Universitario
                        </p>
                    </div>
                    <div class="panel-body pt-1">
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            {!! Form::label('carrera', 'Carrera') !!}
                            {!! Form::text('carrera',$deportista -> carrera, ['class' => 'form-control', 'placeholder' => 'Carrera ...', 'id' => 'txtCarrera', 'disabled' => 'true'])!!}
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            {!! Form::label('anio', 'Año') !!}
                            {!! Form::select('anio', ['1' => 'Primero', '2' => 'Segundo','3' => 'Tercero','4' => 'Cuarto','5' => 'Quinto', ],null,['class' => 'form-control', 'placeholder' => 'Seleecione el año', 'id' => 'selectAño', 'disabled' => 'true'])!!}
                        </div>
                        <div class="form-group col-md-4 col-sm-4 col-xs-12">
                            {!! Form::label('carnet', 'Carnet') !!}
                            {!! Form::text('carnet',null, ['class' => 'form-control', 'placeholder' => 'Cartnet opcional ...', 'id' => 'txtCarnet' , 'disabled' => 'true'])!!}
                        </div>
                    </div>
                </div>
                <div class="panel border-info col-md-4 col-sm-4 col-xs-12 border pull-right">
                    <div class="panel-title mt-1 bg-info rounded text-center">
                        <p class="ml-1">
                            Colegial
                        </p>
                    </div>
                    <div class="panel-body pt-1">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            {!! Form::label('grado', 'Año o Grado') !!}
                            {!! Form::select('grado', ['1' => 'Primero', '2' => 'Segundo','3' => 'Tercero','4' => 'Cuarto','5' => 'Quinto','6' => 'Sexto', '7' => 'Séptimo','8' => 'Octavo','9' => 'Noveno','10' => 'Décimo', '11' => 'Undécimo' ],null,['class' => 'form-control', 'placeholder' => 'Seleecione el año', 'id' => 'selectGrado', 'disabled' => 'true'])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                {!! Form::submit('Guardar Cambios', ['class' => 'btn btn-warning',])!!}
            </div>
        </div>
    </div>

   
</div>
@endsection

