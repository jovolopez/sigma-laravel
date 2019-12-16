<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductosTable extends Migration
{
    public function up()
    {
      Schema::create('productos', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('titulo');
          $table->bigInteger('precio');
          $table->string('descripcion');
          $table->bigInteger('categoria_id')->unsigned();
          $table->foreign('categoria_id')->references('id')->on('categorias');
          $table->string('foto')->nullable();
          $table->integer('stock')->nullable();
          $table->timestamps();
      });
    }

    public function down()
    {
      Schema::dropIfExists('productos');
    }
}
