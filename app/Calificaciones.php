<?php

namespace App;

use App\Table_materias;
use App\Table_alumnos;
use Illuminate\Database\Eloquent\Model;

class Calificaciones extends Model
{
    //
    protected $table = "table_calificaciones";

    public function materias(){
      return $this -> hasOne(Table_materias::class, 'id', 'id_t_materias');
    }
    public function alumnos(){
      return $this -> belongsTo(Table_alumnos::class, 'id_t_alumnos');
    }
}
