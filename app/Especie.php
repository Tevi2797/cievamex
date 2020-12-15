<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    //
     protected $fillable = [
        'nombre_comun','nombre_cientifico','descripcion',
    ];

    public function plantacion(){
    	return $this->belongsTo('App\Especie','id_especie','id');
    }
}
