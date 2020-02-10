<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Categoria;

class HomeController extends Controller
{

  public function index()
  {
    $productos = Producto::paginate(30);
    $categorias = Categoria::paginate(5);
    $vac = ['productos' => $productos, 'categorias' => $categorias];

    return view('home', compact('vac'));
  }

}
