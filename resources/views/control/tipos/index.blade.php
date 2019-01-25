@extends('layouts.main')

@section('titulo', 'Tipo deportistas')

@section('tituloContenido', 'Tipos de deportistas')

@section('content')


  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">  

    <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter">Agregar Tipo</a>
 <hr>
 <div class="table-responsive">
<table class="table table-striped jambo_table">
    <thead>
        <th>ID</th>
        <th>Tipo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    
    </thead>

    <tbody>
        @foreach ($tipos as $tipo)
            <tr>
                <td>{{ $tipo -> id }}</td>
                <td>{{ $tipo -> tipo }}</td>
                
                <td>                    
                    <a href="/control/tipos/{{ $tipo -> id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                </td>
                <td>
                    
                    <a href="/control/tipos/{{ $tipo -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar el tipo {{ $tipo -> tipo }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
 </div>

<div>
    {!! $tipos -> render() !!}
</div>
   
</div>

@include('control.tipos.create') 

@endsection