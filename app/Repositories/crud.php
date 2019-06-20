<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;


class Crud extends Model
{
  //En este repositorio creamos las funciones del crud

  protected $client;

  public function __construct(){
    $this -> client = new Client();
  }
  //Mandamos los parametros por POST
    public function crear(){

    }
    //Mandamos los parametros por GET
    public function leer(){

      //return $this -> client -> getMethod('GET', 'users/2');
      $response = $this -> client -> request('GET', 'https://reqres.in/api/users?page=1');
      return json_decode($response -> getBody()->getContents());

    }
    //Mandamos los parametros por PUT
    public function editar(){

    }
    //Mandamos los parametros por POST
    public function eliminar(){

    }
}
