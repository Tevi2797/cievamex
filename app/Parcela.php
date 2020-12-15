<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    //
    protected $fillable = [
        'latitud','longitud','altitud','ha',
        'pendiente','localidad','id_tiposuelo',
        'id_riego','id_municipio','id_productor'
    ];

    public function visitas(){
    	return $this->hasMany('App\Visita','id_parcela','id');
    }
    public function suelo(){
    	return $this->hasOne('App\TipoSuelo','id','id_tiposuelo');
    }
    public function municipio(){
    	return $this->hasOne('App\Municipio','id','id_municipio');
    }
    public function productores(){
    	return $this->hasMany('App\Productor','id','id_productor');
    }
    public function riego(){
    	return $this->hasOne('App\Riego','id','id_riego');
    }
    public function plantacion(){
    	return $this->hasOne('App\Plantacion','id','id_parcela');
    }
}
