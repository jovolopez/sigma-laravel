@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/css/registro.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
@endsection
@section('title')
Registro
@endsection
@section('main')
<div class="row justify-content-center">
<form id="form" class="regis-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
  @csrf
  <h2>Registro</h2>
  <hr size="1px" color="#ddd">
  <div class="form-group row">
    <div class="campo name">
          <label for="nombre">Nombre</label>
          <input type="text" name="first_name" id="nombre" class="@error('first_name') is-invalid @enderror" placeholder="Nombre" value="{{ old('first_name') }}" autocomplete="off">

            @error('first_name')
                <span class="is-invalid-fb" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span id="nombrefeedback" class="invalid-feedback" role="alert">
              <small>Nombre vacío o inválido.</small>
            </span>
    </div>

    <div class="campo surname">
          <label for="apellido">Apellido</label>
          <input type="text" name="last_name" id="apellido" class="@error('last_name') is-invalid @enderror" placeholder="Apellido" value="{{ old('last_name') }}" autocomplete="off">

          @error('last_name')
              <span class="is-invalid-fb" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <span id="apellidofeedback" class="invalid-feedback" role="alert">
            <small>Apellido vacío o inválido.</small>
          </span>
    </div>

    <div class="campo mail">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="@error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" autocomplete="off">

        @error('email')
            <span class="is-invalid-fb" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span id="emailfeedback" class="invalid-feedback" role="alert">
          <small>El correo electrónico no puede estar vacío.</small>
        </span>
      </div>

      <div class="campo pass">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="pass" class="@error('password') is-invalid @enderror" placeholder="Contraseña">
        <meter max="4" id="password-strength-meter"></meter>
        <span>
          <small id="password-strength-text"></small>
        </span>

        @error('password')
            <span class="is-invalid-fb" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo rpass">
        <label for="rpass">Repita su contraseña</label>
        <input type="password" name="password_confirmation" id="rpass" class="" placeholder="Repetir contraseña">
        <span id="passwordfeedback" class="invalid-feedback" role="alert">
          <small>Las contraseñas no coinciden</small>
        </span>
      </div>

      <div class="campo foto">
            <label for="foto">Avatar (Opcional)</label>
            <input type="file" name="avatar" value="" id="foto">
      </div>

      @error('avatar')
          <span class="is-invalid-fb" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="campo terms" style="display: flex;">
        <input style="width: 2em; margin-right: 1em;" type="checkbox" name="terms" id="terms" class="@error('terms') is-invalid @enderror" class="check">
        <label style="padding-top: 0.5em;" for="terms">Acepto los Términos y Condiciones de este sitio web.</label>

        @error('terms')
            <span class="is-invalid-fb" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo button">
        <button type="submit">Registrarse</button>
      </div>
  </div>
</form>
<script type="text/javascript" src="/js/register.js"></script>
@endsection
