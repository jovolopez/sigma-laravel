@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection
@section('title')
Home
@endsection
@section('main')
<div class="banner">
  <div class="banner-text">
    <h2><b>Oferta!</b></h2>
    <p>Haz click para saber más.</p>
  </div>
  <div class="banner-img">
    <img src="/img/iphone.png" alt="iPhone 11 de Oferta">
  </div>
</div>

<div class="ordenar">
  <a href="lista">
    <ion-icon name="list-box"></ion-icon>
    <p>Ver en lista</p>
  </a>
</div>

<section class="productos">

@forelse ($productos as $producto)
  <article class="producto">
      <a href="/producto/{{$producto->id}}">
        <img style="width: 100%; height: 300px;" src="/storage/productos/{{$producto->foto}}" alt="Macbook">
        <p>{{$producto->titulo}}</p>
        <p><b>{{$producto->precio}}$ ARS - {{$producto->stock}} disponibles</b></p>
      </a>
    </article>
@empty
  <h3>No hay productos actualmente disponibles, disculpe las molestias</h3>
@endforelse
</section>
@endsection
