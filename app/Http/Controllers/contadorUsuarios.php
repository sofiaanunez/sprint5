<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class contadorUsuarios extends Controller
{
  public function contarUsuarios(){
    $usuarios = User::all()->count();
    return response()->json($usuarios);
    }

}
