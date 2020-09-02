<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
     protected $fillable = [
        'activities_id',
            'user_id',
            'horario_id',
            'periodo',
            'anio',
            
    ];


    public function activities(){

        return $this->BelongsTo('App\Activities');
    }
    public function user(){

        return $this->BelongsTo('App\User');
    }
    public function horarios(){

        return $this->BelongsTo('App\horarios');
    }
    public function listas(){

        return $this->hasMany('App\Listas');
    }
}
