@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/home.css">
@endsection
@section('title')
Home
@endsection
@section('main')

<img class="banner" src="/img/banner.jpg" alt="">

<div class="ofertas">

@forelse ($vac['productos'] as $producto)
  <a class="producto" href="/producto/{{$producto->id}}">
    <div class="imagen">
      <img src="@if ($producto->foto)/storage/productos/{{$producto->foto}}@else/img/camara.png @endif" alt="{{$producto->titulo}}">
    </div>
    <div class="texto">
      <div class="titulo">
      {{$producto->titulo}}
      </div>
      <div class="precio">
        $ {{$producto->precio}}.00
      </div>
    </div>
  </a>
@empty
No hay productos actualmente disponibles, disculpe las molestias
@endforelse

@forelse ($vac['productos'] as $producto)
  <a class="producto" href="/producto/{{$producto->id}}">
    <div class="imagen">
      <img src="@if ($producto->foto)/storage/productos/{{$producto->foto}}@else/img/camara.png @endif" alt="{{$producto->titulo}}">
    </div>
    <div class="texto">
      <div class="titulo">
      {{$producto->titulo}}
      </div>
      <div class="precio">
        $ {{$producto->precio}}
      </div>
    </div>
  </a>
@empty
No hay productos actualmente disponibles, disculpe las molestias
@endforelse


</div>
@endsection
