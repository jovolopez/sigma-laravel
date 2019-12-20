@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/editarProducto.css">
@endsection
@section('title')
Cargar Producto
@endsection
@section('main')
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="container" style="min-height: 50vh;">
    <h1>Editar {{$vac[0]->titulo}}.</h1>

    <form class="" action="/editarProducto" method="post" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id" value="{{$vac[0]->id}}">
      <div class="form-group row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre del producto</label>
        <div class="col-sm-10">
          <input name="titulo" type="text" value="{{$vac[0]->titulo}}" class="form-control" id="inputNombre">

          @error('titulo')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="nombrefeedback" class="invalid-feedback">
            Ingrese un nombre
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
          <input name="precio" type="number" value="{{$vac[0]->precio}}"class="form-control" id="inputPrecio">

          @error('precio')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="preciofeedback" class="invalid-feedback">
            Ingrese un precio.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputDesc" class="col-sm-2 col-form-label">Detalle</label>
        <div class="col-sm-10">
          <textarea name="inputDetalle" id="inputDetalle" class="form-control" value="" aria-label="With textarea">{{$vac[0]->descripcion}}</textarea>

          @error('descripcion')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="detallefeedback" class="invalid-feedback">
            Ingrese el detalle del producto.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputFoto" class="col-sm-2 col-form-label">Imagenes</label>
        <div class="col-md-2">
          <input id="inputImagen" type="file" name="foto" class="form-control-file" id="inputFoto">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Categoría.</label>
        <div class="col-sm-10">
          <select id="inputCategoria" name="categoria_id" class="form-control">
            <option value="{{$vac[0]->categoria->id}}">{{$vac[0]->categoria->nombre}}</option>
            @foreach ($vac[1] as $categoria)
              @if ($categoria->id != $vac[0]->categoria->id)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
              @endif
            @endforeach
          </select>

          @error('categoria_id')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="categoriafeedback" class="invalid-feedback">
            Seleccione una categoria.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputStock" class="col-sm-2 col-form-label">Stock disponible.</label>
        <div class="col-sm-10">
          <input name="stock" type="number" class="form-control" id="inputStock" value="{{$vac[0]->stock}}">

          @error('stock')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="stockfeedback" class="invalid-feedback">
            Ingrese las unidades disponibles.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Modificar producto</button>
        </div>
      </div>
    </form>

  </div>

<script type="text/javascript" src="/js/cargaProducto.js" ></script>

@endsection
