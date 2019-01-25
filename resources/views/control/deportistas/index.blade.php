@extends('layouts.main')

@section('titulo', 'Deportistas')

@section('tituloContenido', 'Deportistas')

@section('content')

<div class="row">
    <div class="row col-md-12 col-sm-12 col-xs-12">
    <a class="btn btn-info ml-2" href="{{ route('deportistas.create') }}">
    Agregar Deportista
    </a>
    </div>
    <div class="form-group col-md-4 col-sm-4 col-xs-12">
        {!! Form::label('ver', 'Ver:') !!}
        {!! Form::select('tipo_id', $tipos, null, ['class' => 'form-control','placeholder' => 'Seleccione ...','id' => 'tipo', 'required'] )!!}
    </div>
</div>

    <div class="table-responsive" id="contenedorTabla">
        <table class="table table-striped jambo_table bulk_action" id="tablaDefecto">
            <thead>
                <tr class="heading">
                    <th class="column-title">
                        ID
                    </th>
                    <th class="column-title">
                        Nombre
                    </th>
                    <th class="column-title">
                        Apellido
                    </th>
                    <th class="column-title">
                        Edad
                    </th>
                    <th class="column-title">
                        Sexo
                    </th>
                    <th class="column-title">
                        Dirección
                    </th>
                    <th class="column-title">
                        Teléfono
                    </th>
                    <th class="column-title">
                        Nacimiento
                    </th>
                    <th class="column-title">
                        Cédula
                    </th>
                    <th class="column-title">
                        Grado
                    </th>
                    <th class="column-title">
                        Año
                    </th>
                    <th class="column-title">
                        carrera
                    </th>
                    <th class="column-title">
                        Carnet
                    </th>
                    <th class="column-title">
                        Tipo
                    </th>
                    <th class="column-title">
                        Institución
                    </th>
                    <th class="column-title">
                        Deporte
                    </th>
                    <th class="column-title">
                        Editar
                    </th>
                    <th class="column-title">
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deportistas as $deportista)
                <tr class="even pointer">
                    <td>
                        {{ $deportista -> id }}
                    </td>
                    <td>
                        {{ $deportista -> nombre }}
                    </td>
                    <td>
                        {{ $deportista -> apellido }}
                    </td>
                    <td>
                        {{ $deportista -> edad }}
                    </td>
                    <td>
                        {{ $deportista -> sexo }}
                    </td>
                    <td>
                        {{ $deportista -> direccion }}
                    </td>
                    <td>
                        {{ $deportista -> telefono }}
                    </td>
                    <td>
                        {{ $deportista -> fechaNacimiento }}
                    </td>
                    <td>
                        {{ $deportista -> cedula }}
                    </td>
                    <td>
                        {{ $deportista -> grado }}
                    </td>
                    <td>
                        {{ $deportista -> anio }}
                    </td>
                    <td>
                        {{ $deportista -> carrera }}
                    </td>
                    <td>
                        {{ $deportista -> carnet }}
                    </td>
                    <td>
                        {{ $deportista -> tipo->tipo }}
                    </td>
                    <td>
                        {{ $deportista -> institucion->nombre }}
                    </td>
                    <td>
                        {{ $deportista -> deporte->name }}
                    </td>
                    <td>
                        <a class="btn btn-warning" href="/control/deportistas/{{ $deportista -> id }}/edit">
                            <i class="fa fa-edit">
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/control/deportistas/{{ $deportista -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar el deportista {{ $deportista -> nombre }}?')">
                            <i class="fa fa-trash-o">
                            </i>
                        </a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        {!! $deportistas -> render() !!}
    </div>
    @endsection
</hr>