@extends('layouts.master')
@section('css')
<link rel="stylesheet" href="/css/login.css">
@endsection
@section('title')
Iniciar Sesión
@endsection
@section('main')
  <body>
    <div class="container">
      <form class="login-form" action="login" method="post">
        @csrf
        <h2>Iniciar sesión</h2>
        <hr size="1px" color="#ddd">
        <div class="campo mail">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}">
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <div class="campo pass">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña">
        </div>
        <a style="font-size: 12px;" href="{{ route('password.request') }}">Olvidé la clave.</a>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="campo remem">
          <input type="checkbox" name="remem" id="remem" value="y">
          <label for="remember">Mantentener sesión iniciada</label>
        </div>
        <div class="campo button">
          <button type="submit" name="button">Iniciar sesión</button>
        </div>
      </form>
    </div>
  </body>
@endsection
