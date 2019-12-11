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

   //Middleware para estar autenticado.
  public function __construct()
  {
      $this->middleware('admin');
  }

  public function showForm()
  {
      return view('cargarProducto');
  }

  public function showProduct(){
    return view('producto');
  }
}
