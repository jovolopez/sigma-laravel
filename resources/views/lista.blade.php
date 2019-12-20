@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="/css/lista.css">
@endsection
@section('title')
Lista
@endsection
@section('main')
<div class="cont-a">
  <div class="fil-titu">
    <div class="opt-text">
      Filtros
    </div>
    <div class="fil-icon">
      <ion-icon name="options"></ion-icon>
    </div>
  </div>
  <form class="fil-sec-opt" action="list.php" method="get">
    <div class="fil-sec-titu">Tipo</div>
    <ul>
      @forelse ($vac[1] as $categoria)
        @if (isset($vac[2]) && $categoria->id == $vac[2])
          <a href="/lista">
          <div class="fil-delete">
            {{$categoria->nombre}} ✗</a>
          </div>
          </a>
        @else
          <div class="fil-categoria">
            <a href="/lista/{{$categoria->id}}">{{$categoria->nombre}}</a>
          </div>
        @endif
      @empty
        <h2>No hay categorías disponibles</h2>
      @endforelse
    </ul>
  </form>
</div>
<div class="cont-b">
  <div class="opciones">
    <div class="opcion">
      <div class="vista">
        <div class="vista-c">
          <a href="home.php">
            <ion-icon name="grid"></ion-icon>
          </a>
        </div>
        <div class="barra">
          |
        </div>
        <div class="vista-l">
          <a href="list.php">
            <ion-icon name="list-box"></ion-icon>
          </a>
        </div>
      </div>
    </div>
    <div class="opcion">
      <div class="opt-text">
        Ordenar
      </div>
      <div class="opt-icon">
        <ion-icon name="arrow-dropdown"></ion-icon>
      </div>
    </div>
    <div class="opcion opt-filt">
      <div class="opt-text">
        Filtrar
      </div>
      <div class="opt-icon">
        <ion-icon name="options"></ion-icon>
      </div>
    </div>
  </div>
  <section class="productos">
    @if (!$vac[0])
      <p style="text-align: center;">No hay productos que coincidan con la busqueda. Lo sentimos</p>
    @else
    @forelse ($vac[0] as $producto) {{--$vac tiene los productos(0) y las categorias(1)--}}
      <article class="producto">
        <div class="imagen-p">
          <a href="/producto/{{$producto->id}}"><img style="width:125px; height: 125px;" src="/storage/productos/{{$producto->foto}}" alt="Macbook"></a>
        </div>
        <div class="info-p">
          <a href="/producto/{{$producto->id}}"><p class="titulo-p">{{$producto['titulo']}}</p>
          @if ($producto['stock'] == null)
            <p style="text-decoration: line-through;">{{$producto['precio']}}$ ARS</p>
            <p style="color: red;">Fuera de stock</p>
          @else
            <p><b>{{$producto['precio']}}$ ARS</b>
            {{$producto['stock']}} restantes</p>
          @endif
          <label for="">{{$producto->categoria->nombre}}</label>
          </a>
        </div>
        <div class="opt-p">
        @if (Auth::user() && Auth::user()->is_admin == 1)
          <form class="" action="/borrarProducto" method="post">
            @csrf
              <input type="hidden" name="id" value="{{$producto->id}}">
              <button class="baja"type="submit" name="button">Eliminar</button>
          </form>
          <a href="/editar/{{$producto->id}}">
          <div class="editar">
            Editar
          </div></a>
        @endif
          <form class="" action="/agregarAlCarrito" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$producto->id}}">
            <button class="baja"type="submit" name="button"><ion-icon name="cart"></ion-icon></button>
          </form>
          <ion-icon name="heart-empty"></ion-icon>
          </a>
        </div>
      </article>
      </a>

    @empty
      <p style="text-align: center;">No hay productos que coincidan con la busqueda. Lo sentimos</p>
    @endforelse
    @endif
  </section>
</div>
@endsection
