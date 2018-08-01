<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

class controladorIndex extends Controller
{
    public function headerIndex(){
      return view('index');
    }

    public function mostrarServicios(){
      $mostrar = Servicio::paginate(3);
      return view('index')->with('mostrar', $mostrar);
    }
}
