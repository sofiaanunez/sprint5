<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Servicio;

class controladorServicios extends Controller
{
    public function listarServicios(){

    $servicio = Servicio::all();

      return view('servicios.listar')->with('servicios', $servicio);
    }

    public function agregarServicios(){
      return view('servicios.agregar');

      $servicio = Servicio::all();

    }

     public function editarServicios($id, Request $request){

       $servicios = Servicio::find($id);

      return view('servicios.editar')->with('servicios', $servicios);

      }


       public function actualizarServicios($id, Request $request){

         $servicios = Servicio::find($id);

         $servicios->rubro = $request->input('rubro');
         $servicios->descripcion = $request->input('descripcion');
         //$servicios->id_usuario = $request->input('id_usuario');
         $servicios->monto = $request->input('monto');
         $servicios->duracion = $request->input('duracion');

         $servicios->save();

        return redirect()->route('servicio');

        }


    public function validarServicios(Request $request){

      $validacion = [

        'rubro' => 'required|alpha',
        'descripcion' => 'required',
        // 'email' => 'required|email',
        'monto' => 'required|integer',
        'duracion' => 'required',

      ];

      $mensajes = [
        'rubro.required' => 'Ingrese rubro',
        'rubro.alpha' => 'Ingrese un formato válido de rubro',
        'descripcion.required' => 'Ingrese descripción',
        // 'email.required' => 'Ingrese su correo electrónico',
        // 'email.email' => 'Ingrese un formato válido de correo electrónico',
        'duracion.required' => 'Ingrese duración',
        'duracion.required' => 'Ingrese duración en un formato válido',
        'monto.required' => 'Ingrese un precio',
        'monto.integer' => 'Ingrese un formato de precio válido',
      ];

      $this->validate($request,$validacion,$mensajes);
       $servicio = Servicio::create([
         'rubro'=> $request->input('rubro'),
         'descripcion'=> $request->input('descripcion'),
         'id_usuario'=> \Auth::user()->id,
         'duracion'=> $request->input('duracion'),
         'monto'=> $request->input('monto')
         //$request->except(['_token', 'button'])
       // $request->only('rubro', 'descripcion', 'id_usuario', 'fecha_inicio', 'fecha_fin', 'monto')
    ]);

    //echo "Se agregó tu servicio";
    return redirect()->route('servicio');

    }

    public function eliminarServicio($id,Request $request){

      $servicios = Servicio::find($id);

      $servicios->delete();

      return redirect()->route('servicio');

    }

    public function faq(){
      return view('plantilla-final.faq');
    }
}
