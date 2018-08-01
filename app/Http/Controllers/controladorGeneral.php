<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorGeneral extends Controller
{
  public function login(){
    return view('plantilla-final.login');
  }
  public function faq(){
    return view('plantilla-final.faq');
  }
}
