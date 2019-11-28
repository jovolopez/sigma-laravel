@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/css/registro.css">
@endsection
@section('title')
Registro
@endsection
@section('main')
<div class="row justify-content-center">
<form class="regis-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
  @csrf
  <h2>Registro</h2>
  <hr size="1px" color="#ddd">
  <div class="form-group row">
    <div class="campo name">
          <label for="nombre">Nombre</label>
          <input type="text" name="first_name" id="name" class="@error('name') is-invalid @enderror" placeholder="Nombre" value="{{ old('name') }}">

            @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="campo surname">
          <label for="apellido">Apellido</label>
          <input type="text" name="last_name" id="surname" class="@error('surname') is-invalid @enderror" placeholder="Apellido" value="{{ old('surname') }}">

          @error('last_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
    </div>

    <div class="campo mail">
        <label for="email">Email</label>
        <input type="text" name="email" id="mail" class="@error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo pass">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="pass" class="@error('password') is-invalid @enderror" placeholder="Contraseña">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo rpass">
        <label for="rpass">Repita su contraseña</label>
        <input type="password" name="password_confirmation" id="rpass" class="" placeholder="Repetir contraseña">
      </div>

      <div class="campo foto">
            <label for="foto">Avatar (Opcional)</label>
            <input type="file" name="avatar" value="" id="foto">
      </div>

      @error('avatar')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror

      <div class="campo terms" style="display: flex;">
        <input style="width: 2em; margin-right: 1em;" type="checkbox" name="terms" id="terms" class="@error('terms') is-invalid @enderror" class="check">
        <label style="padding-top: 0.5em;" for="terms">Acepto los Términos y Condiciones de este sitio web.</label>

        @error('terms')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo button">
        <button type="submit">Registrarse</button>
      </div>
  </div>
</form>
@endsection
