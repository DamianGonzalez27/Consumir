<?php

namespace App;

use App\Table_alumnos;
use App\Table_materias;
use Illuminate\Database\Eloquent\Model;

class Table_calificaciones extends Model
{

  protected $fillable = [
    'id_t_alumnos',
    'id_t_materias',
    'calificacion',
    'fecha_registro'
  ];

  public function alumnos(){

    return $this->belongsTo(Table_alumnos::class);
  }

  public function materias(){

    return $this->belongsTo(Table_materias::class, 'id_t_materias');
  }

  public function test(){
    return "test";
  }
}
