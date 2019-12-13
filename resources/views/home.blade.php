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

@for ($i=0; $i < 4; $i++)
  <article class="producto">
      <a href="/producto">
        <img src="/img/macbook.jpg" alt="Macbook">
        <p>Macbook Infinity 2019</p>
      </a>
    </article>
@endfor

  <div class="banner">
    <div class="banner-text">
      <h2><b>Oferta!</b></h2>
      <p>Haz click para saber más.</p>
    </div>
    <div class="banner-img">
      <img src="/img/iphone.png" alt="iPhone 11 de Oferta">
    </div>
  </div>

  @for ($i=0; $i < 3; $i++)
    <article class="producto">
        <a href="producto.php">
          <img src="/img/macbook.jpg" alt="Macbook">
          <p>Macbook Infinity 2019</p>
        </a>
      </article>
  @endfor

  <article class="producto">
    <img src="/img/products.png" alt="">
    <p>Ver más productos</p>
  </article>
</section>
@endsection
