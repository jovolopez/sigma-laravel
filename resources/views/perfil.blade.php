@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/perfil.css">
@endsection
@section('title')
{{ ucfirst(Auth::user()->first_name) }}
@endsection
@section('main')

    <div class="container">
      <div class="banner">
        <div class="banner-img">
          @if (!Auth::user()->avatar == NULL)
            <img src="/storage/avatars/{{Auth::user()->avatar}}" alt="Perfil">
            @else
            <img src="img/profile.png" alt="Perfil">
          @endif
        </div>
        <div class="banner-text">
          <h2>{{ucfirst(Auth::user()->first_name)}} {{ucfirst(Auth::user()->last_name)}}</h2>
        </div>
      </div>

      <div class="opciones">
        @if (Auth::user()->is_admin == 1)
          <div class="opcion">
            <ion-icon class="icon" name="add-circle"></ion-icon>
            <a href="/cargarProducto">Cargar Producto.</a>
          </div>
        @endif
        <div class="opcion">
          <ion-icon class="icon" name="card"></ion-icon>
          <p>Datos de pago</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="home"></ion-icon>
          <p>Datos de envío</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="cube"></ion-icon>
          <p>Estados de mis pedidos</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="key"></ion-icon>
          <p>Cambiar contraseña</p>
        </div>
        <div class="opcion">
          <ion-icon class="icon" name="log-out"></ion-icon>
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
              @csrf
              <input type="submit" name="logout" value="Cerrar Sesión">
          </form>
        </div>

      </div>
    </div>

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>

  </html>


@endsection
