<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntasController extends Controller
{

  public function show()
  {
      return view('preguntas');
  }

}
