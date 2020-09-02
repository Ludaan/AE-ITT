<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listas extends Model
{
     protected $fillable = [
        'clases','grupos_id','alumno_id',
    ];

     public function grupos()
    {
        return $this->BelongsTo('App\Grupos');
    }

    public function alumnos(){

        return $this->hasMany('App\Alumnos');
    }
    public function clases(){

        return $this->BelongsTo('App\Clases');
    }
}
