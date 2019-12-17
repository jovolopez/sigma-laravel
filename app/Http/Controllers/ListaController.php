<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class listaController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show()
  {
    $productos = Producto::all();

    return view('lista', compact('productos'));
  }
  
}
