<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Categoria;

class listaController extends Controller
{

  public function show($filter = 0)
  {

    if (!is_numeric($filter)) {
      $filter = 0;
    }
    
    $productos = Producto::all();
    $categorias = Categoria::all();

    if ($filter) {
     $productos = Producto::where('categoria_id', $filter)->get();
    }

    $vac = [$productos, $categorias, $filter];
    return view('lista', compact('vac'));
  }

}
