<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";
    public $guarded = [];

    public function categoria()
    {
      return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function usuario()
    {
      return $this->belongsToMany('App\User', 'Carrito', 'usuario_id', 'producto_id');
    }
}
