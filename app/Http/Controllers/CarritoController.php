<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Carrito;
use App\User;
use Auth;

class CarritoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function show()
  {

      return view('carrito');
  }
}
