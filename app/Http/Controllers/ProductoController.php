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

  public function showProduct(){
    return view('producto');
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

  public function showEditProduct($id = 1)
  {
    if (!is_numeric($id)) {
      return redirect('/');
    }
    $producto = Producto::find($id);
    $categorias = Categoria::all();
    $vac = [$producto, $categorias];

    return view('editarProducto', compact('vac'));
  }

  public function editProduct(Request $request)
  {
    $producto = Producto::find($request->id);

    if ($request->file('foto')) {
        $imagen = $request->file('foto')->store('public/img');
        $imagen = basename($imagen);
        $producto->foto = $imagen;
    }

    $producto->titulo = $request->titulo;
    $producto->precio = $request->precio;
    $producto->descripcion = $request->descripcion;
    $producto->categoria_id = $request->categoria_id;
    $producto->stock = $request->stock;

    $producto->save();

    return redirect('/')->with('status', 'Producto modificado')->with('operation', 'success');
  }

  public function downProduct(Request $request)
  {
    Producto::find($request->id)->delete();
    return redirect('/lista')->with('status', 'Producto eliminado')->with('operation', 'success');
  }
}
