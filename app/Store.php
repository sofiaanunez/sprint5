<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  public function store(Request $request)
{
    $usuario = new User;
    $usuario->create($request->all());
    return redirect('login');

}

  // public function store(Request $request){
  //   $servicio = new Servicios([
  //     'rubro' -> $request -> input('rubro'),
  //     'descripcion' -> $request -> input('descripcion'),
  //     'id_usuario' -> $request -> input('id_usuario'),
  //     'monto' -> $request -> input('monto'),
  //     'fecha_inicio' -> $request -> input('fecha_inicio'),
  //     'fecha_fin' -> $request -> input('fecha_fin')
  //   ]);
  //
  //   $usuario->save();
  //   }

    // public function actualizar(Request $request){
    //   $servicios = Servicio::find(1);
    //
    //   $servicios->rubro = $request->input('rubro');
    //   $servicios->descripcion = $request->input('descripcion');
    //   $servicios->id_usuario = $request->input('id_usuario');
    //   $servicios->monto = $request->input('monto');
    //   $servicios->fecha_inicio = $request->input('fecha_inicio');
    //   $servicios->fecha_fin = $request->input('fecha_fin');
    //
    //   $servicios->save();
    // }
}
