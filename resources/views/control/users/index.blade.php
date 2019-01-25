@extends('layouts.main')

@section('titulo', 'Usuarios')
@section('tituloContenido', 'Usuarios')

@section('content')
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
      <a href="" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-user-plus"></i> Nuevo Usuario</a>
<hr>


    <div class="table-responsive">
  
<table class="table table-striped jambo_table">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Tipo</th>
        <th>Imagen</th>
        <th>Editar</th>
        <th>Eliminar</th>
    
    </thead>

    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user -> id }}</td>
                <td>{{ $user -> name }}</td>
                <td>{{ $user -> email }}</td>
                
                <td>
                @if ($user -> tipo == "administrador")
                <span class="label label-primary">{{ $user -> tipo }}</span>
                @else
                <span class="label label-danger">{{ $user -> tipo }}</span>
                @endif
                </td>
                <td>{{ $user -> imagen }}</td>
                <td>                    
                    <a href="/control/users/{{ $user -> id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>  
                </td>
                <td>
                    
                    <a href="/control/users/{{ $user -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar al usuario {{ $user -> name }}?')" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>

<div>
    {!! $users -> render() !!}
</div>
</div>
@include('control.users.create') 

@endsection