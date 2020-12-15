<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPlantacion extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion',
    ];

    public function plantacion(){
    	return $this->belongsTo('App\Plantacion','id_tipoplantacion','id');
    }
}
