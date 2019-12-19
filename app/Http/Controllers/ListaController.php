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

  public function search(Request $request)
  {
    $search = '%' . trim($request->input('search') . '%');
    $productos = Producto::where('titulo', 'LIKE', $search)->get();

    return view('lista', compact('productos'));
  }

}
