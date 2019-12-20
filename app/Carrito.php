<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    public $table = 'carritos';
    public $guarded = [];

    public function producto()
    {
    return $this->belongsTo('App\Producto','producto_id');
    }
}
