@extends('layouts.master')
@section('css')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/carrito.css">
@endsection
@section('title')
Mi carro - Sigma
@endsection
@section('main')

  <body class="container mt-5">
    <div class="row d-flex justify-content-center mb-3">
      <div id="custom" class="col-12 col-lg-8 mt-5">
        <h1 class="d-flex justify-content-center my-3">Mi Carrito</h1>

        <!-- Inicio tabla de productos -->
        <div class="table-responsive-sm">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="border-0 bg-light">
                  <div class="p-2 px-3 text-uppercase">Producto</div>
                </th>
                <th scope="col" class="border-0 bg-light">
                  <div class="py-2 text-uppercase">Precio</div>
                </th>
              </tr>
            </thead>
            <tbody>
              <!-- Producto -->
              <tr>
                <th scope="row" class="border-0">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-1_zrifhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block text-truncate" style="max-width: 150px;">Reloj de Carol Danvers</a></h5><span class="text-muted font-weight-normal font-italic d-block d-inline-block text-truncate">Categoría: Relojes</span>
                      <span class="font-weight-lighter font-italic d-block">Eliminar</span>
                    </div>
                  </div>
                </th>
                <td class="border-0 align-middle"><strong>$1299.00</strong></td>
              </tr>
              <!-- Fin Producto -->
              <tr>
                <th scope="row">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-3_cexmhn.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"><a href="#" class="text-dark d-inline-block text-truncate" style="max-width: 150px;">Reactor Generacion 2019</a></h5><span class="text-muted font-weight-normal font-italic d-block d-inline-block text-truncate">Categoria: Electronica</span>
                      <span class="font-weight-lighter font-italic d-block">Eliminar</span>
                    </div>
                  </div>
                </th>
                <td class="align-middle"><strong>$79.00</strong></td>
              </tr>

              <tr>
                <th scope="row">
                  <div class="p-2">
                    <img src="https://res.cloudinary.com/mhmd/image/upload/v1556670479/product-2_qxjis2.jpg" alt="" width="70" class="img-fluid rounded shadow-sm">
                    <div class="ml-3 d-inline-block align-middle">
                      <h5 class="mb-0"><a href="#" class="text-dark d-inline-block text-truncate" style="max-width: 150px;">Gray Nike running Hawkeye Edition</a></h5><span class="text-muted font-weight-normal font-italic d-block d-inline-block text-truncate">Categoria: Calzado</span>
                      <span class="font-weight-lighter font-italic d-block">Eliminar</span>
                    </div>
                  </div>
                  <td class="align-middle"><strong>$299.00</strong></td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Fin Carro -->
      </div>



      <div id="custom" class="col-12 col-lg-3 mt-5 totalDiv">
        <div class="col-lg-6 mw-100">
          <div class="bg-light rounded-pill mt-4 px-3 py-2 text-uppercase font-weight-bold">Resumen del Pedido</div>
          <div class="p-3">
            <p class="font-italic mb-4">El envío y los costos adicionales son calculados en base a los valores que ingresaste.</p>
            <ul class="list-unstyled mb-4">
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Subtotal</strong><strong>$1.677,00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Envío</strong><strong>$400,00</strong></li>
              <li class="d-flex justify-content-between py-3 border-bottom"><strong class="text-muted">Total</strong>
                <h5 class="font-weight-bold">$2.077,00</h5>
              </li>
            </ul><a href="#" class="btn btn-dark rounded-pill py-2 btn-block">Pagar</a>
          </div>
        </div>
      </div>
    </div>

  <script type="text/javascript" src="/js/carrito.js"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
