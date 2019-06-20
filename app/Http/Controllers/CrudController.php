<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Crud;
use App\Presenters\Verificador;
use App\Http\Requests\UsuariosRequest;

class CrudController extends Controller
{

  protected $crud;

  public function __construct(Crud $crud){
      $this -> crud = $crud;
  }
  public function listado(){
    $listado = $this -> crud -> leer();

    return view('components.listado', compact('listado'));
  }
  public function crear(){
    return view('components.crear');
  }
  public function create(UsuariosRequest $request){
    $usuario = $this -> crud -> crear($request);
    return view('components.creado', compact('usuario'));
  }
}
                                                                                                                                                                                                                                                                                                                                                                               
