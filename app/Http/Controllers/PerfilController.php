<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

   //Middleware para estar autenticado.
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show()
  {
      return view('perfil');
  }
}
