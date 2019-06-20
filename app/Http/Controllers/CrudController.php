<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Crud;

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
}
                                                                                                                                                                                                                                                                                                                                                                               
