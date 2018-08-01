<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
  protected $table = 'usuarios';
  protected $fillable = ['email', 'password', 'nombre', 'apellido',
  'fecha_nacimiento', 'profesion', 'pais', 'provincia', 'ciudad', 'genero'];
  protected $guarded = ['id'];
  protected $dates=['fecha_nacimiento'];
  protected $primarykey=['id'];
}
