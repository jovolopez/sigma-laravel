<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
  public function showForm()
  {
      return view('cargarProducto');
  }

  public function showProduct(){
    return view('producto');
  }

  public function saveProduct(){
    $producto = new Producto();

    $producto->titulo = request('titulo');
    $producto->descripcion = request('descripcion');

    $producto->save();

    return redirect('/');
  }
}
