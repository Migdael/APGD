@extends('layouts.main')

@section('titulo', 'Deportistas')

@section('tituloContenido', 'Datos del Deportista')

@section('content')
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    {!! Form::open(['route' => 'deportistas.store', 'method' => 'POST','files' => true, 'class' => 'ml-0']) !!}

    <div class="panel border-info">
        <div class="panel-body badge-light">

            <div class="panel border-info">
                <div class="panel-title bg-info rounded text-center">
                    <p class="tex-black">
                        Datos Generales
                    </p>
                </div>
                <div class="panel-body pt-1">
                    <div class="form-row">
                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                            {!! Form::label('nombre', 'Nombre') !!}
                            {!! Form::text('nombre',null, ['class' => 'form-control', 'placeholder' => 'Nombre ...', 'required' ])!!}
                        </div>
                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                            {!! Form::label('apellido', 'Apellido') !!}
                            {!! Form::text('apellido',null, ['class' => 'form-control', 'placeholder' => 'Apellido ...', 'required' ])!!}
                        </div>
                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                            <label>Sexo</label>
                            <div class="form-control">
                                <input checked="" class="ml-2" id="sexo" name="sexo" type="radio" value="F"> F </input>
                                <input class="ml-4" id="sexo" name="sexo" type="radio" value="M"> M </input>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                            {!! Form::label('edad', 'Edad') !!}
                            {!! Form::number('edad',null, ['class' => 'form-control','data-inputmask' => '"mask" : "99"', 'placeholder' => 'Edad', 'required'])!!}
                             
                        </div>
                        <div class="form-group col-md-2 col-sm-12 col-xs-12 has-feedback">
                            {!! Form::label('fechaNacimiento', 'Nacimiento') !!}
                            <input type="text" class="form-control has-feedback-right" data-inputmask="'mask' : '99/99/9999'" placeholder= "dd/mm/aaaa" id="fechaNacimiento" name="fechaNacimiento">
                                <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2 col-sm-12 col-xs-12 has-feedback">
                            {!! Form::label('telefono', 'Teléfono') !!}

                            <input type="text" class="form-control has-feedback-right" data-inputmask="'mask' : '9999 9999'" placeholder= "Numero" id="telefono" name="telefono">
                                <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                            </input>

                        </div>
                        <div class="form-group col-md-3 col-sm-12 col-xs-12 has-feedback">
                            {!! Form::label('cedula', 'N° Cédula') !!}
                            {!! Form::text('cedula',null, ['class' => 'form-control has-feedback-right','data-inputmask' => '"mask" : "999-999999-9999[A]"', 'placeholder' => 'Numero de cédula, opcional'])!!}
                            <span class="fa fa-credit-card form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                            {!! Form::label('deporte_id', 'Deporte') !!}
                            {!! Form::select('deporte_id', $deportes, null, ['class' => 'form-control','placeholder' => 'Seleccione ...', 'required' ] )!!}
                        </div>
                        <div class="form-group col-md-2 col-sm-12 col-xs-12">
                            {!! Form::label('nivel', 'Nivel') !!}
                            {!! Form::select('tipo_id', $tipos, null, ['class' => 'form-control','placeholder' => 'Seleccione ...','id' => 'selectTipo', 'required'] )!!}
                        </div>


                        <div class="form-group col-md-3 col-sm-12 col-xs-12">
                            {!! Form::label('institucion_id', 'Centro de estudio') !!}
                            {!! Form::select('institucion_id', $instituciones, null, ['class' => 'form-control','placeholder' => 'Seleccione...', 'required' ] )!!}
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 has-feedback">
                            <label>Dirección</label>
                            {!! Form::text('direccion',null, ['class' => 'form-control has-feedback-right', 'placeholder' => 'Dirección... Opcional' ])!!}
                            <span class="fa fa-map form-control-feedback right" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="panel border-info col-md-7 col-sm-12 col-xs-12">
                    <div class="panel-title bg-info rounded mt-1 text-center">
                        <p class="tex-black">
                            Universitario
                        </p>
                    </div>
                    <div class="panel-body pt-1">
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            {!! Form::label('carrera', 'Carrera') !!}
                            {!! Form::text('carrera',null, ['class' => 'form-control', 'placeholder' => 'Carrera ...', 'id' => 'txtCarrera', 'disabled' => 'true'])!!}
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            {!! Form::label('anio', 'Año') !!}
                            {!! Form::select('anio', ['1' => 'Primero', '2' => 'Segundo','3' => 'Tercero','4' => 'Cuarto','5' => 'Quinto', ],null,['class' => 'form-control', 'placeholder' => 'Seleecione...', 'id' => 'selectAño', 'disabled' => 'true'])!!}
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            {!! Form::label('carnet', 'Carnet') !!}
                            {!! Form::text('carnet',null, ['class' => 'form-control', 'placeholder' => 'Cartnet opcional...', 'id' => 'txtCarnet' , 'disabled' => 'true'])!!}
                        </div>
                    </div>
                </div>
                <div class="panel border-info col-md-4 col-sm-12 col-xs-12 border pull-right">
                    <div class="panel-title mt-1 bg-info rounded text-center">
                        <p class="tex-black">
                            Colegial
                        </p>
                    </div>
                    <div class="panel-body pt-1">
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            {!! Form::label('grado', 'Año o Grado') !!}
                            {!! Form::select('grado', ['1' => 'Primero', '2' => 'Segundo','3' => 'Tercero','4' => 'Cuarto','5' => 'Quinto','6' => 'Sexto', '7' => 'Séptimo','8' => 'Octavo','9' => 'Noveno','10' => 'Décimo', '11' => 'Undécimo' ],null,['class' => 'form-control', 'placeholder' => 'Seleecione...', 'id' => 'selectGrado', 'disabled' => 'true'])!!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btnGuardar'])!!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}

    
                        
</div>
@endsection
