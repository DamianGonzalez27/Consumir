<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direcciones extends Model
{
    protected $fillable = [
      'codigo_postal', 'municipio', 'estado', 'colonia'
    ];
}
