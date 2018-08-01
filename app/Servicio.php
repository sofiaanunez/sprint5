<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $servicio = "servicios";

    protected $guarded = [];

    // public function usuario(){
    //   return $this->belongsTo(User::class, 'id_usuario');
    // }
}
