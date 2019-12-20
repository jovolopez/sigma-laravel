@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/carrito.css">
@endsection
@section('title')
Lista
@endsection
@section('main')

  <div class="cont-b">
    <section class="productos">
      @if (!$vac[0])
        <p style="text-align: center;">No hay productos que coincidan con la busqueda. Lo sentimos</p>
      @else
      @forelse ($vac[0] as $producto) {{--$vac tiene los productos(0) y las categorias(1)--}}
        <article class="producto">
          <div class="imagen-p">
            <a href="/producto/{{($producto->producto()->get()->first()->id)}}"><img src="/storage/productos/{{($producto->producto()->get()->first()->foto)}}" alt="Macbook"></a>
          </div>
          <div class="info-p">
            <a href="/producto/{{($producto->producto()->get()->first()->id)}}"><p class="titulo-p">{{($producto->producto()->get()->first()->titulo)}}</p>
            <p><b>{{($producto->producto()->get()->first()->precio)}}$ ARS</b>
            {{($producto->producto()->get()->first()->stock)}} restantes</p>
            <label for="">{{($producto->producto()->get()->first()->categoria->nombre)}}</label>
            </a>
            <form class="" action="/sacarDelCarrito" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$producto->producto()->get()->first()->id}}">
              <input id="delete" type="submit" name="delete" value="Eliminar">
            </form>
          </div>
          <div class="opt-p">
            </a>
          </div>
        </article>
        </a>
      @empty
        <p style="text-align: center;">El carrito está vacío</p>
      @endforelse
      @endif
    </section>
  </div>


  <div class="cont-a">
    <div class="fil-titu">
      <div class="opt-text">
        <h2>Resumen del Pedido</h2>
        <p>El envío y los costos adicionales son calculados en base a los valores que ingresaste.</p>
        <br>
        <br>
        <br>
        <h2>Valor Total: <b style="color: green;">{{$vac[1]}}$ ARS</b></h2>
        <br>
        <br><a href="#">
          <div class="editar">
            <h3>Pagar</h3></a>
          </div>
      </div>
    </div>
  </div>

@endsection
