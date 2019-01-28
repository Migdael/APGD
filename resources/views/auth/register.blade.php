@extends('auth.main')
@section('titulo', 'Registro')


@section('content')
 <form method="POST" action="{{ route('register') }}">
    <h1>Registro</h1>
        @csrf

        <div class="form-group has-feedback">
                <input id="name" type="text" placeholder="Nombre Completo" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                <span class="fa fa-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif 
        </div>

        <div class="form-group has-feedback">
                <input id="name" type="text" placeholder="Nombre Usuario" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('name') }}" required autofocus>
                <span class="fa fa-user form-control-feedback"></span>
                @if ($errors->has('username'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif 
        </div>

        <div class="form-group has-feedback">
                <input id="email" type="email" placeholder="ejemplo@gmail.com" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                <span class="fa fa-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group has-feedback">

                <input id="password" type="password" placeholder="Contraseña" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                <span class="fa fa-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
        </div>

        <div class="form-group has-feedback">
                <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control" name="password_confirmation" required>
                <span class="fa fa-lock form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrar') }}
                </button>
        </div>
    </form>
@endsection
