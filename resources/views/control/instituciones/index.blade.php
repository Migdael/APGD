@extends('layouts.main')

@section('titulo', 'instituciones')

@section('tituloContenido', 'Instituciones de estudio')

@section('content')


    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Agregar Institucion</a>
 <hr>
 <div class="table-responsive">
<table class="table table-striped jambo_table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    
    </thead>

    <tbody>
        @foreach ($instituciones as $institucion)
            <tr>
                <td>{{ $institucion -> id }}</td>
                <td>{{ $institucion -> nombre }}</td>
                <td>{{ $institucion -> tipo }}</td>
                
                <td>                    
                    <a href="/control/instituciones/{{ $institucion -> id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                </td>
                <td>
                    
                    <a href="/control/instituciones/{{ $institucion -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar la institucion {{ $institucion -> nombre }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

    <div>
        {!! $instituciones -> render() !!}
    </div>
 </div>


@include('control.instituciones.create') 

@endsection