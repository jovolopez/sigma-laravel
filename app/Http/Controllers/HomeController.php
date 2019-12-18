<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class HomeController extends Controller
{

  public function index()
  {
    $productos = Producto::paginate(7);

    return view('home', compact('productos'));
  }

}
