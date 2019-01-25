@extends('layouts.main')

@section('titulo', 'Deportes')
@section('tituloContenido', 'Deportes')

@section('content')

 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">  
<a class="btn btn-info" data-target="#exampleModalCenter" data-toggle="modal" href="#">
    Agregar Deporte
</a>
<hr>    
<div class="table-responsive">
        <table class="table table-striped jambo_table">
            <thead>
                <tr class="headings">

                    <th class="column-title">
                        Id
                    </th>
                    <th class="column-title">
                        Deporte
                    </th>
                    <th class="column-title">
                        Entrenador
                    </th>
                    <th class="column-title">
                        Imagen
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
                @foreach ($deportes as $deporte)
                                {{-- expr --}}
                <tr class="even pointer">

                    <td>
                        {{ $deporte -> id }}
                    </td>
                    <td>
                        {{ $deporte -> name }}
                    </td>
                    <td>
                        {{ $deporte -> user->name }}
                    </td>
                    <td>
                        {{ $deporte -> imagen }}
                    </td>
                    <td>
                        <a class="btn btn-warning" href="/control/deportes/{{ $deporte -> id }}/edit">
                            <i class="fa fa-edit">
                            </i>
                        </a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="/control/deportes/{{ $deporte -> id }}/destroy" onclick="return confirm('¿Seguro que deseas elimar el deporte {{ $deporte -> name }}?')">
                            <i class="fa fa-trash-o">
                            </i>
                        </a>
                    </td>
               @endforeach
            </tbody>
        </table>
    </div>


@include('control.deportes.create')
<div>
    {!! $deportes -> render() !!}
</div>
</div>
@endsection
