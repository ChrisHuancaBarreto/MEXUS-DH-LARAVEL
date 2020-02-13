@extends('/layouts/layout')

@section('title')
    MeXus - Ingresar a mi cuenta
@endsection

@section('content')
<form method="POST" class="form-register" action="{{ route('login') }}">
    @csrf
    <h2 class="form-titulo">Iniciar Sesión</h2>
    <div class="contenedor-inputs">

    <label for="email" class="labels-name">E-mail</label>
    <input id="email" type="email" class=" input-100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label for="password" class="labels-name">Contraseña</label>
    <input id="password" type="password" class="input-100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <div class="form-check input-100">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" style="color:white;" for="remember">
            {{ __('Recordarme') }}
        </label>
    </div>
<div class="input-100 olvide text-right">
    @if (Route::has('password.request'))
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Olvidaste tu contraseña?') }}
    </a>
     @endif
</div>

    <input type="submit" class="btn-enviar" value="Ingresar">
    <div class="input-100">
        <br>
    </div>

    <div class="input-100">
        <p class="form-link">¿No tenes una cuenta? <a href="{{ route('register') }}">Registrate.</a></p>
    </div>
    </div>
    
</form>
@endsection
