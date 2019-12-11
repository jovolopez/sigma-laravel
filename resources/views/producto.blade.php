@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/producto.css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
@endsection
@section('title')
Producto
@endsection
@section('main')
<div class="container">
  <div class="producto">
    <div class="imagen">
      <img src="img/macbook.jpg" alt="">
    </div>
    <div class="descripcion">
      <h2>Macbook Pro 2019</h2>
      <p>Caracteristicas:</p>
      <ul>
        <li>Procesador Intel i9 Quad Core</li>
        <li>AMD Radeon Graphics Integrated Card</li>
        <li>macOS Catalina</li>
      </ul>
    </div>
    <div class="acciones">
        <input id="comprar" type="submit" name="" value="Comprar">

        <input id="agregar" type="submit" name="" value="Agregar al carrito">
    </div>
    <div class="medios-de-pago">
      <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/468X60.jpg" title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="468" height="60"/>
    </div>
  </div>

  <div class="ver-mas">
    <h3>Productos que podrían interesarte:</h3>

    <div class="rel-productos">
      <section>
        <article class="rel-producto">
          <h3>iPhone 11 Pro</h3>
          <img src="img/iphone.png" alt="">
        </article>

        <article class="rel-producto">
          <h3>iPhone 11 Pro</h3>
          <img src="img/iphone.png" alt="">
        </article>

        <article class="rel-producto">
          <h3>iPhone 11 Pro</h3>
          <img src="img/iphone.png" alt="">
        </article>

        <article class="rel-producto">
          <h3>iPhone 11 Pro</h3>
          <img src="img/iphone.png" alt="">
        </article>


      </section>
    </div>

  </div>
</div>

@endsection
