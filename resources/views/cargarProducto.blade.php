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
    <h1>Cargar producto nuevo.</h1>

    <form id="formulario" class="" action="productsaction" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre del producto</label>
        <div class="col-sm-10">
          <input name="titulo" value="{{ old('titulo') }}" type="text" class="form-control" id="inputNombre" autocomplete="off">

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
          <input name="precio" type="number" class="form-control" id="inputPrecio">

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
        <label for="inputDetalle" class="col-sm-2 col-form-label">Detalle</label>
        <div class="col-sm-10">
          <textarea id="inputDetalle" autocomplete="off" name="descripcion" class="form-control" aria-label="With textarea"></textarea>

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
        <label for="inputFoto" class="col-sm-2 col-form-label">Imagen</label>
        <div class="col-md-4">
          <input id="inputImagen" type="file" class="form-control-file" id="inputFoto" name="imagen">

          @error('imagen')
              <span style="color: red;" role="alert">
                  <small>{{ $message }}</small>
              </span>
          @enderror
          <div id="imagenfeedback" class="invalid-feedback">
            La imagen no puede estar vacía.
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Categoría.</label>
        <div class="col-sm-10">
          <select id="inputCategoria" name="categoria_id" class="form-control">
            <option value="0">Seleccione una categoría</option>
            @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
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
          <input id="inputStock" name="stock" type="number" class="form-control" id="inputStock">

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
          <button type="submit" class="btn btn-primary">Previsualizar producto.</button>
        </div>
      </div>
    </form>

  </div>

<script type="text/javascript" src="/js/cargaProducto.js" ></script>

@endsection
