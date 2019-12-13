<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{

  public function showForm()
  {
      return view('cargarProducto');
  }

  public function showProduct(){
    return view('producto');
  }
}
