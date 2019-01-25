@extends('layouts.main')

@section('titulo', 'Editar Usuario')
@section('tituloContenido', 'Editar Perfil')


@section('content')
<div class="x_content centrado">
    <div class="row col-lg-9 col-md-9 col-sm-9 col-xs-12 bg-light border border-info">
        {!! Form::open(['route' => ['perfil.update', $user], 'method' => 'PUT','files' => true, 'id'=>'form-perfil']) !!}
        <div class="form-row">
            <div class="card badge-light col-lg-7 col-md-7 col-sm-7 col-xs-12 mt-2">
                <div class="card-title mt-1 bg bg-info rounded text-center tex-black">
                    Datos
                </div>
                <div class="form-row">
                    <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback mt-2">
                        <label>
                            Nombre
                        </label>
                        <input class="form-control has-feedback-left" id="name" name="name" placeholder="Nombre completo" type="text" value="{{ $user->name }}">
                            <span aria-hidden="true" class="fa fa-user form-control-feedback left">
                            </span>
                        </input>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                    <label>
                        Correo
                    </label>
                    <input class="form-control has-feedback-left" id="email" name="email" placeholder="ejemplo@gmail.com" type="text" value="{{ $user->email }}">
                        <span aria-hidden="true" class="fa fa-envelope form-control-feedback left">
                        </span>
                    </input>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12 has-feedback">
                    {!! Form::label('password', 'Contraseña Actual') !!}
                    {!! Form::password('password', ['class' => 'form-control has-feedback-left', 'placeholder' => '*******', 'required' ])!!}
                    <span aria-hidden="true" class="fa fa-lock form-control-feedback left">
                    </span>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12 has-feedback">
                    {!! Form::label('newpassword', 'Nueva contraseña') !!}
                    {!! Form::password('newpassword', ['class' => 'form-control has-feedback-left','id' => 'newpassword', 'placeholder' => '*******', 'required' ])!!}
                    <span aria-hidden="true" class="fa fa-lock form-control-feedback left">
                    </span>
                </div>
                <div class="form-group col-md-12 col-sm-12 col-xs-12 has-feedback">
                    {!! Form::label('repassword', 'Repetir contraseña') !!}
                    {!! Form::password('repassword', ['class' => 'form-control has-feedback-left','id' => 'repassword', 'placeholder' => '*******', 'required' ])!!}
                    <span aria-hidden="true" class="fa fa-lock form-control-feedback left">
                    </span>
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 centrado">
                <div class="row col-md-12 col-sm-12 col-xs-12">
                    <div class="card bg-light col-md-12 col-sm-12 col-xs-12 mt-2">
                        <div class="card-title col-md-12 col-sm-12 col-xs-12 mt-1 bg bg-info rounded text-center tex-black">
                            Foto
                        </div>
                        <div class="form-row text-center">
                            <div class="form-group">
                                <img class="card-img img-perfil mt-2" id="foto" src="/imagenes/usuarios/{{ Auth::user()->imagen }}">
                                </img>
                            </div>
                        </div>
                    </div>
                    <div class="row col-md-12 col-sm-12 col-xs-12 mt-2">
                        <label>
                            Cambiar imagen
                        </label>
                        <input accept=".jpg,.png" id="imagen" name="imagen" onchange="readURL(this);" style="color: transparent" type="file">
                        </input>
                    </div>
                </div>
            </div>
        </div>
        <div class="row col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <hr class="mt-1 mb-1">
                
                    <input class="btn btn-primary" onclick="comprobarClave()" type="button" value="Guardad Cambios">
                    </input>
              
            </hr>
        </div>
    </div>
</div>
{!! Form::close() !!}
<script>
    function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
    $('#foto')
    .attr('src', e.target.result)
    
    };
    reader.readAsDataURL(input.files[0]);
    }
    }

    function comprobarClave(){ 



    if ($('#newpassword').val() == $('#repassword').val()){
         $('#form-perfil').submit(); 
    } 
       
    else {
        alert("La verificacion de su nueva contraseña no coincide")
        $('#newpassword').focus();
    }
}
</script>
@endsection
