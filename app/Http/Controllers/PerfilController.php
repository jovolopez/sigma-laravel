<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class PerfilController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show()
  {
    $categorias = Categoria::all();
    $vac = ['categorias' => $categorias];
     return view('perfil', compact('vac'));
  }
  
}
