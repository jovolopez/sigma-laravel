<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

   //Middleware para estar autenticado. // TODO: Hay que agregar el MW de "usuario administrador".
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function showForm()
  {
      return view('cargarProducto');
  }
}
