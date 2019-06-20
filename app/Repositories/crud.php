<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;


class Crud extends Model
{
  //En este repositorio creamos las funciones del crud

  protected $client;

  public function __construct(){
    $this -> client = new Client([
      'base_uri' => 'https://reqres.in/api/'
    ]);
  }
  //Mandamos los parametros por POST
    public function crear($request){
      $response = $this -> client -> request('POST', 'users',[
        'name' => $request -> input('name'),
        'job' => $request -> input('job')
      ]);
      return json_decode($response->getBody());
    }
    //Mandamos los parametros por GET
    public function leer(){

      //return $this -> client -> getMethod('GET', 'users/2');
      $response = $this -> client -> request('GET', 'users?page=1');
      return json_decode($response -> getBody()->getContents());
    }
    //Funcion para ver un unico Usuario
    public function unico($id){
      $response = $this -> client -> request('GET', 'users/'. $id);
      return json_decode($response -> getBody() -> getContents());
    }
    //Mandamos los parametros por PUT
    public function editado($id){
      $response = $this -> client -> request('PUT', 'users/'.$id);
      return json_decode($response -> getBody() -> getContents());
    }
    //Mandamos los parametros por POST
    public function eliminar($id){
      return $response = $this -> client -> request('DELETE', 'users/'.$id);
      //return json_decode($response -> getBody() -> getContents());
    }
}
