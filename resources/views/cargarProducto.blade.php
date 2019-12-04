@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

    <form>
      <div class="form-group row">
        <label for="inputNombre" class="col-sm-2 col-form-label">Nombre del producto</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputNombre">
        </div>
      </div>

      <div class="form-group row">
        <label for="inputDetalle" class="col-sm-2 col-form-label">Detalle</label>
        <div class="col-sm-10">
          <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputFoto" class="col-sm-2 col-form-label">Imagenes</label>
        <div class="col-md-2">
          <input type="file" class="form-control-file" id="inputFoto">
        </div>
        <div class="col-md-2">
          <input type="file" class="form-control-file" id="inputFoto">
        </div>
        <div class="col-md-2">
          <input type="file" class="form-control-file" id="inputFoto">
        </div>
        <div class="col-md-2">
          <input type="file" class="form-control-file" id="inputFoto">
        </div>
        <div class="col-md-2">
          <input type="file" class="form-control-file" id="inputFoto">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Categoría.</label>
        <div class="col-sm-10">
          <select class="form-control">
            <option>Seleccione una categoría</option>
            @for ($i=0; $i < 10; $i++)
              <option value="">Categoría {{$i+1}}</option>
            @endfor
          </select>
        </div>
      </div>

      <div class="form-group row">
        <label for="inputStock" class="col-sm-2 col-form-label">Stock disponible.</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="inputStock">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Previsualizar producto.</button>
        </div>
      </div>
    </form>

  </div>


@endsection
