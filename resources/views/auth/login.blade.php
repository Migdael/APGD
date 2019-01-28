@extends('auth.main')




@section('content')
<form  method="POST" action="{{ route('login') }}">
    <h1>
        Acceder
    </h1>
    @csrf
    <div class="form-group has-feedback">
        <input id="email" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('email') }}" required autofocus placeholder="Usuario">
            <span class="fa fa-user form-control-feedback">
            </span>
            @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('username') }}
                </strong>
            </span>
            @endif
        </input>
    </div>
    <div class="form-group has-feedback">
        <input  id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Contraseña">
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