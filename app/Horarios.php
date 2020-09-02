<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
     protected $fillable = [
        'lunes',
            'martes',
            'miercoles',
            'jueves',
            'viernes',
            
    ];

     public function grupos()
    {
        return $this->hasMany('App\Grupos');
    }
}
