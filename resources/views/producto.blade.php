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
    @if ($vac['producto'] != null)
      <div class="imagen">
        <img style="max-width: 300px;" src="/storage/productos/{{$vac['producto']->foto}}" alt="">
      </div>
      <div class="descripcion">
        <a href="/lista/{{$vac['producto']->categoria->id}}"><p>{{$vac['producto']->categoria->nombre}} /</p></a>
        <h2>{{$vac['producto']->titulo}}</h2>
        <ul>
          <li><b>{{$vac['producto']->precio}} $ ARS - {{$vac['producto']->stock}} Disponibles</b></li>
          <li>Caracteristicas:</li>
        </ul>
        <p>{{$vac['producto']->descripcion}}</p>
      </div>
      <div class="acciones">
        <form class="" action="/agregarAlCarrito" method="post">
          @csrf
          <input type="hidden" name="id" value="{{$vac['producto']->id}}">
          <input id="comprar" type="submit" name="" value="Comprar">
          <input id="agregar" type="submit" name="" value="Agregar al carrito">
        </form>
      </div>
      <div class="medios-de-pago">
        <img src="https://imgmp.mlstatic.com/org-img/banners/ar/medios/468X60.jpg" title="MercadoPago - Medios de pago" alt="MercadoPago - Medios de pago" width="468" height="60"/>
      </div>
    </div>
    @else
      <h2>El producto buscado no está disponible actualmente</h2>
    @endif

  <div class="ver-mas">
    <h3>Productos que podrían interesarte:</h3>

    <div class="rel-productos">
      <section>
        @if ($vac['producto'] != null)
          @forelse ($vac['producto']->categoria->productos as $prod)
            @if ($prod->id != $vac['producto']->id)
              <article class="rel-producto">
                <a href="/producto/{{$prod->id}}">
                <h3>{{$prod->titulo}}</h3>
                <p>{{$prod->precio}} $ ARS</p>
                <img style="max-height: 300px;" src="/storage/productos/{{$prod->foto}}" alt="">
                </a>
              </article>
            @endif
          @empty
            <h2>No hay productos relacionados</h2>
          @endforelse
        @endif

      </section>
    </div>

  </div>
</div>

@endsection
