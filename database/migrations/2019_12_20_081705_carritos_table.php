<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CarritosTable extends Migration
{
  public function up()
  {
    Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->string('estado');
            $table->bigInteger('cantidad');
            $table->timestamps();
        });
  }

  public function down()
  {
    Schema::dropIfExists('carritos');
  }
}
