<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Table_alumnos;
use App\Table_calificaciones;
use App\Calificaciones;

class Servicioscontroller extends Controller
{
  /*
  * Metodo Post
  */
  public function post(Request $request){


  $nueva_calificacion = Table_calificaciones::create([
    'id_t_alumnos' => $request->input('id_alumno'),
    'id_t_materias' => $request->input('id_materia'),
    'calificacion' => $request->input('calificacion'),
    'fecha_registro' => $request->input('fecha_registro')
  ]);

  if ($nueva_calificacion) {
    return response()->json($response = [
      'success' => 'ok',
      'msg' => 'Calificacion registrada'
    ]);
  }

  return response()->json($response = [
    'success' => 'fail',
    'msg' => 'Ocurrio un error'
  ]);
}

/*
* Metodo GET
*/
public function get($id_alumno){

  $calificaciones = Calificaciones::where('id_t_alumnos', $id_alumno)->get();
  $califica = [];
  $promedio=[];
  foreach ($calificaciones as $calificacion) {
    $califica = [
      'id_usuario' => $calificacion->alumnos->id,
      'nombre_alumno' => $calificacion->alumnos->nombre,
      'apellido_alumno' => $calificacion->alumnos->ap_paterno,
      'materia' => $calificacion->materias->nombre,
      'calificacion' => $calificacion->calificacion,
      'fecha_registro' => $calificacion->fecha_registro
    ];
    $promedio[] = $calificacion->calificacion;
  }
  $resultado_promedio = null;
  for ($i=0; $i <count($promedio) ; $i++) {
    $resultado_promedio +=$promedio[$i];
  }
    $resultado = $resultado_promedio / count($promedio);

  return response()->json($response = [
    'data' => $calificaciones,
    'promedio' => $resultado
  ]);

}
/*
* Metodo Put
*/
public function put(Request $request){

  $calificacion = Table_calificaciones::findOrFail($request -> input('id_calificacion'));
  $calificacion -> calificacion = $request -> input('calificacion');
  $calificacion -> save();

  if ($calificacion -> calificacion == $request -> input('calificacion')) {

    return response()->json($response = [
      'success' => 'OK',
      'msg' => 'Calificacion actualizada'
    ]);
  }

  return response()->json($response = [
    'Success' => 'Fail',
    'msg' => 'Ups algo salio mal'
  ]);


}
public function delete(Request $request){

  $eliminado = Table_calificaciones::findOrFail($request-> input('id_calificacion'))->delete();
  if($eliminado)
    return response()->json($response = [
      'success' => 'OK',
      'msg' => 'Calificacion eliminada'
    ]);
    return response()->json($response = [
      'success' => 'Failed',
      'msg' => 'Ups Algo salio mal'
    ]);
}
}
