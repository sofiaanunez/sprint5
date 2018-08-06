<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Servicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {
        Schema::create('servicios', function(Blueprint $table){
          $table->increments('id');
          $table->string('rubro');
          $table->integer('id_usuario');
          $table->string('descripcion');
          $table->integer('monto');
          $table->string('duracion');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */


      public function down()
      {
          Schema::drop('servicios');
      }

}
