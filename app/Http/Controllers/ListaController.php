<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class listaController extends Controller
{

  public function show()
  {
    $productos = Producto::all();

    return view('lista', compact('productos'));
  }

}
