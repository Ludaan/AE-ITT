<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    protected $fillable = [
        'nombre', 'descripcion','tipo'
    ];


     public function grupos()
    {
        return $this->hasMany('App\Grupos');
    }
}
