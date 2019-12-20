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

  public function saveProduct(Request $req){

    $ruta = '';
    if ($req->file('imagen') != NULL) {
        //muevo el archivo
        $ruta = request('imagen')->store('public\\productos');
        $ruta = basename($ruta);

        //Comprimir la imagen para que no ocupe tanto espacio.
        $filepath = public_path('\\storage\\productos\\'.$ruta);

        try {
            \Tinify\setKey("7rl2g2dfnNXgN51jJCgwGmXtRfqdhKwP");
            $source = \Tinify\fromFile($filepath);
            $source->toFile($filepath);
        } catch(\Tinify\AccountException $e) {
            // Verify your API key and account limit.
            return redirect('images/create')->with('error', $e->getMessage());
        } catch(\Tinify\ClientException $e) {
            // Check your source image and request options.
            return redirect('images/create')->with('error', $e->getMessage());
        } catch(\Tinify\ServerException $e) {
            // Temporary issue with the Tinify API.
            return redirect('images/create')->with('error', $e->getMessage());
        } catch(\Tinify\ConnectionException $e) {
            // A network connection error occurred.
            return redirect('images/create')->with('error', $e->getMessage());
        } catch(Exception $e) {
            // Something else went wrong, unrelated to the Tinify API.
            return redirect('images/create')->with('error', $e->getMessage());
        }
    }

    $reglas = [
      'titulo' => 'string|min:3|max:32|required',
      'precio' => 'numeric|required',
      'descripcion' => 'string|min:3|max:255|required',
      'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg',
      'categoria_id' => 'required',
      'stock' => 'numeric|required'
    ];

    $this->validate($req, $reglas);

    $producto = new Producto();

    $producto->titulo = request('titulo');
    $producto->precio = request('precio');
    $producto->descripcion = request('descripcion');
    $producto->categoria_id = request('categoria_id');
    $producto->stock = request('stock');
    $producto->foto = $ruta;

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
