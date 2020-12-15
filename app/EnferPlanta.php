<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnferPlanta extends Model
{
    //
     protected $fillable = [
        'nombre','descripcion',
    ];

    public function plantaciones(){
    	return $this->belongsToMany('App\Plantacion','enfermedades_plantaciones','id_enfermedad','id_plantacion');
    }
}
