<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'usuarios';
    protected $fillable = ['email', 'password', 'nombre', 'apellido',
    'fecha_nacimiento', 'profesion', 'pais', 'provincia', 'ciudad', 'genero',
    'avatar'];

    protected $dates=['fecha_nacimiento'];
    protected $primarykey=['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function service(){
    //   return $this->belongToMany(Servicios::class, 'servicios');
    // }
}
