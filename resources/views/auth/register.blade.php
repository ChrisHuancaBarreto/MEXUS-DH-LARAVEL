@extends('/layouts/layout')

@section('title')
    MeXus - Registrate Ahora!
@endsection

@section('content')
<form method="POST" class="form-register" action="{{ route('register') }}">
    @csrf
    <h2 class="form-titulo">Registrate</h2>
    <div class="contenedor-inputs">

    <label for="name" class="labels-name">Nombre Completo</label>
    <input id="name" type="text" class=" input-100 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="email" class="labels-name">E-mail</label>
    <input id="email" type="email" class="input-100 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="password" class="labels-name">Contraseña</label>
    <input id="password" type="password" class="input-100 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <label for="password-confirm" class="labels-name">Vuelva a escribir la contraseña</label>
    <input id="password-confirm" type="password" class="input-100 form-control" name="password_confirmation" required autocomplete="new-password">

    <input type="submit" class="btn-enviar" value="Registrarme">
    <p class="form-link">¿Ya tenes una cuenta? <a href="{{ route('login') }}">Ingresa.</a></p>
    </div>
</form>
@endsection