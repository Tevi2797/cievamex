<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visita extends Model
{
    //
     protected $fillable = [
        'fecha','actividad','descripcion','id_parcela',
    ];

    public function parcela(){
    	return $this->belongsTo('App\Parcela','id','id_parcela');
    }
}
