@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('title')
Iniciar Sesión
@endsection
@section('main')

  <div class="container">
    <form id="form" class="login-form" action="login" method="post">
      @csrf
      <h2>Iniciar sesión</h2>
      <hr size="1px" color="#ddd">
      <div class="campo mail">
        <label for="email">Email</label>
        <input autocomplete="off" type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">

        <span id="nombrefeedback" class="invalid-feedback" role="alert">
          <small>Campo inválido</small>
        </span>

        @error('email')
          <span id="nombrefeedback" class="is-invalid-fb" role="alert">
            <small>{{$message}}</small>
          </span>
        @enderror
      </div>
      <div class="campo pass">
        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Contraseña">

        <span id="passwordfeedback" class="invalid-feedback" role="alert">
          <small>Campo inválido</small>
        </span>

        @error('password')
          <span class="is-invalid-fb" role="alert">
            <small>{{$message}}</small>
          </span>
        @enderror
      </div>
      <br>
      <a style="font-size: 12px; text-decoration: underline;" href="{{ route('password.request') }}">Olvidé la clave.</a>
      <div class="campo remem">
        <input type="checkbox" name="remem" id="remem" value="y">
        <label for="remember">Mantentener sesión iniciada</label>
      </div>
      <div class="campo button">
        <button type="submit" name="button">Iniciar sesión</button>
      </div>
    </form>
  </div>

<script type="text/javascript" src="/js/login.js"></script>
@endsection
