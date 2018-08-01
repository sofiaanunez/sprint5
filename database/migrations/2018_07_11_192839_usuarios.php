<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('usuarios', function(Blueprint $table){
           $table->increments('id');
           $table->string('email');
           $table->string('password');
           $table->string('nombre');
           $table->string('apellido');
           $table->date('fecha_nacimiento');
           $table->string('profesion');
           $table->string('pais');
           $table->string('provincia');
           $table->string('ciudad');
           $table->string('genero');
           $table->string('avatar')->default("default_avatar.png");
           $table->rememberToken();
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
           Schema::drop('usuarios');
       }

}
