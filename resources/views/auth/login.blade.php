@extends('auth.main')
@section('titulo', 'Login')
@section('tituloContenido', 'Acceder')

@section('content')
<form action="{{ route('login') }}" method="POST">
    <h1>
        Acceder
    </h1>
    @csrf
    <div class="form-group has-feedback">
        <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} " id="name" name="name" placeholder="Nombre de usuario" required="" type="name" value="{{ old('name') }}">
            <span class="fa fa-user form-control-feedback">
            </span>
            @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('name') }}
                </strong>
            </span>
            @endif
        </input>
    </div>
    <div class="form-group has-feedback">
        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Contraseña" required="" type="password">
            <span class="fa fa-lock form-control-feedback" ">
            </span>
            @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('password') }}
                </strong>
            </span>
            @endif
        </input>
    </div>



    <div class="form-group row mb-0">
        <div class="col-md-12">
            <button class="btn btn-primary pull-left" type="submit">
                {{ __('Entrar') }}
            </button>
            <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                {{ __('Olvide mi contraseña?') }}
            </a>
        </div>

    </div>
    
</form>
@endsection
