<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Consumir;
use App\Direcciones;

class ConsumirController extends Controller
{
  protected $consumir;

  public function __construct(Consumir $consumir){
    $this -> consumir = $consumir;
  }

    public function buscarCodigo(Request $request){
      $codigo = $request -> input('codigo');
      $respuesta = $this -> consumir -> consultar($codigo);

      return view('consumo.datos', compact('respuesta'));
    }

    public function guardarDireccion(Request $request){
      $direccion = $this -> consumir -> guardarDireccion($request);
      $listado = $this -> consumir -> listadoDirecciones();
      return view('consumo.listado', compact('listado'));
    }

    public function listadoDirecciones(){
      $listado = $this -> consumir -> listadoDirecciones();

      return view('consumo.listado', compact('listado'));
    }
}
