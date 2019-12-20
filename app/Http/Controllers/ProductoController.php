<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{

  public function showForm()
  {
    $categorias = Categoria::all();
    return view('cargarProducto', compact('categorias'));
  }

  public function showProduct($id){
    $producto = Producto::find($id);
    
    return view('producto', compact('producto'));
  }

  public function saveProduct(){
    $producto = new Producto();

    $producto->titulo = request('titulo');
    $producto->precio = request('precio');
    $producto->descripcion = request('descripcion');
    $producto->categoria_id = request('categoria_id');
    $producto->stock = request('stock');

    $producto->save();

    return redirect('/');
  }
}
