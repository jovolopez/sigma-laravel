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
        </div>
      </div>

      <div class="form-group row">
        <label for="inputPrecio" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
          <input name="precio" type="number" value="{{$vac[0]->precio}}"class="form-control" id="inputPrecio">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputDesc" class="col-sm-2 col-form-label">Detalle</label>
        <div class="col-sm-10">
          <textarea name="descripcion" id="inputDesc" class="form-control" value="" aria-label="With textarea">{{$vac[0]->descripcion}}</textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputFoto" class="col-sm-2 col-form-label">Imagenes</label>
        <div class="col-md-2">
          <input type="file" name="foto" class="form-control-file" id="inputFoto">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Categoría.</label>
        <div class="col-sm-10">
          <select name="categoria_id" class="form-control">
            <option value="{{$vac[0]->categoria->id}}">{{$vac[0]->categoria->nombre}}</option>
            @foreach ($vac[1] as $categoria)
              @if ($categoria->id != $vac[0]->categoria->id)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
              @endif
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputStock" class="col-sm-2 col-form-label">Stock disponible.</label>
        <div class="col-sm-10">
          <input name="stock" type="number" class="form-control" id="inputStock" value="{{$vac[0]->stock}}">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Modificar producto</button>
        </div>
      </div>
    </form>

  </div>


@endsection
