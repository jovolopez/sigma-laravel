<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaController extends Controller
{
    public function show()
    {
      return view('lista');
    }
}
