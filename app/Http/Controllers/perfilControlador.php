<?php
<<<<<<< HEAD
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

>>>>>>> e78e984497f270d19dd9b28924d7a86ac75c6098
class perfilControlador extends Controller
{
    public function perfil(){
      $datosPerfil = User::all();
<<<<<<< HEAD
=======

>>>>>>> e78e984497f270d19dd9b28924d7a86ac75c6098
      return view('perfil')->with('datosPerfil', $datosPerfil);
    }
}
