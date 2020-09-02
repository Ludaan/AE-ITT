<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    protected $fillable = [
        'name',
            'primer_apellido',
            'segundo_apellido',
            'nocontrol',
            'email',
            'carrera',
            'semestre',
            'acreditado',
            'tel',
            'edad',
            'repeticion',
            'representativo',
            'discapacidad',
            'sexo',
            'ruta_foto',
            'listas_id',
    ];


     public function listas(){

        return $this->BelongsTo('App\Listas');
    }
}

     
            

