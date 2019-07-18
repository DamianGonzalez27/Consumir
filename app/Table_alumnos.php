<?php

namespace App;

use App\Table_calificaciones;
use Illuminate\Database\Eloquent\Model;

class Table_alumnos extends Model
{
    public function calificaciones(){

      return $this -> hasMany(Table_calificaciones::class, 'id_t_alumnos');
      
    }
}
