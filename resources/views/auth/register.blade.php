@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/css/registro.css">
@section('title')
Registro
@section('main')
<div class="row justify-content-center">
<form class="regis-form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
  @csrf
  <h2>Registro</h2>
  <hr size="1px" color="#ddd">
  <div class="form-group row">
    <div class="campo foto">
          <label for="foto">Suba una foto</label>
          <input type="file" name="foto" value="" id="foto">
    </div>

    <div class="campo name">
          <label for="nombre">Nombre</label>
          <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" placeholder="Nombre" value="{{ old('name') }}">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    </div>

    <div class="campo surname">
          <label for="apellido">Apellido</label>
          <input type="text" name="apellido" id="surname" class="@error('surname') is-invalid @enderror" placeholder="Apellido" value="{{ old('surname') }}">

          @error('surname')
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
        <input type="password" name="rpass" id="rpass" class="" placeholder="Repetir contraseña">
      </div>

      <div class="campo terms">
        <input type="checkbox" name="terms" id="terms" class="@error('terms') is-invalid @enderror" class="check">
        <label for="terms">Acepto los Términos y Condiciones de este sitio web.</label>

        @error('terms')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>

      <div class="campo recuer">
        <input type="checkbox" name="recuer" id="recuer" class="check">
        <label for="recuer">Mantener sesión iniciada</label>
      </div>

      <div class="campo button">
        <button type="submit">Registrarse</button>
      </div>
  </div>
</form>
@endsection
