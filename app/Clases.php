<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model
{
    protected $table = 'clases';
	protected $fillable = [
    'clase1',
            'clase2',
            'clase3',
            'clase4',
            'clase5',
            'clase6',
            'clase7',
            'clase8',
            'clase9',
            'clase10',
            'clase11',
            'clase12',
            'clase13',
            'clase14',
            'clase15',
            'clase16',
            'clase17',
            'clase18',
            'clase19',
            'clase20',
        ];

        public function listas(){

        return $this->hasMany('App\Listas');
    }
}
