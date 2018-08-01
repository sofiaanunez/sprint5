<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contrataciones extends Migration
{
     public function up()
     {
         Schema::create('contrataciones', function( Blueprint $table){
           $table->increments('id');
           $table->timestamps();

           $table->integer('id_servicio')->unsigned()->nullable()->index();
           $table->integer('id_usuario')->unsigned()->nullable()->index();
           //
           // $table->foreign('id_usuario')->references('id')->on('usuarios');
           //
           // $table->foreign('id_servicio')->references('id')->on('servicios');

         });
     }

       public function down()
       {
           Schema::drop('contrataciones');
       }

}
