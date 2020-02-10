<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class ContactoController extends Controller
{

  public function show()
  {
    $categorias = Categoria::All();
    $vac = ['categorias' => $categorias];

    return view('contacto', compact('vac'));
  }

}
