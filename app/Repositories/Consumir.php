<?php

namespace App\repositories;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Consumir extends Model
{
  protected $client;

  public function __construct(){
    $this -> client = new Client([
      'base_uri' => 'https://api-codigos-postales.herokuapp.com/v2/codigo_postal/'
    ]);
  }
  public function consultar($codigo){
    $response = $this -> client -> request('GET', $codigo);

    return json_decode($response -> getBody() -> getContents());
  }
}
