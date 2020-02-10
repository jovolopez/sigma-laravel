<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class PreguntasController extends Controller
{

  public function show()
  {
    $categorias = Categoria::all();
    $vac = ['categorias' => $categorias];
     return view('preguntas', compact('vac'));
  }

}
