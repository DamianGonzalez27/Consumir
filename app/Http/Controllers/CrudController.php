<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Crud;
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
  public function unicoUsuario($id){
    $usuario = $this -> crud -> unico($id);
    return view('components.show', compact('usuario'));
  }
  public function editarUsuario($id){
    $usuario = $this -> crud -> unico($id);
    return view('components.editar', compact('usuario'));
  }
  public function usuarioEditado($id){
    $usuario = $this -> crud -> editado($id);
    return view('components.editado', compact('usuario'));
  }
  public function eliminarUsuario($id){
    $usuario = $this -> crud -> eliminar($id);
    return view('components.eliminado', compact('usuario'));
  }
}
                                                                                                                                                                                                                                                                                                                                                                               
