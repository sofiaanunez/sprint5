<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class perfilControlador extends Controller
{
    public function perfil(){
      $datosPerfil = User::all();

      return view('perfil')->with('datosPerfil', $datosPerfil);
    }
}
