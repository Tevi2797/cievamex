<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantacion extends Model
{
    //
    protected $fillable = [
        'cantidad','año','id_especie','id_tipoplantacion',
        'id_ciclo','id_parcela'
    ];

    public function enfermedadesplantacion(){
        return $this->belongsToMany('App\EnferPlanta','enfermedades_plantaciones','id_plantacion','id_enfermedad')->withTimestamps();
    }
    public function parcela(){
    	return $this->belongsTo('App\Parcela','id_parcela','id');
    }
    public function ciclos(){
    	return $this->hasMany('App\CicloFloracion','id_plantacion','id');
    }
    public function tipo(){
    	return $this->hasOne('App\TipoPlantacion','id','id_tipoplantacion');
    }
    public function especie(){
    	return $this->hasOne('App\Especie','id','id_especie');
    }
    public function manejo_plagas(){
    	return $this->belongsToMany('App\ManejoPlaga','plantacion__manejo_plagas','id_plantacion','id_manejoplaga')->withTimestamps();
    }
    public function plagas(){
    	return $this->belongsToMany('App\Plaga','plantaciones__plagas','id_plantacion','id_plaga')->withTimestamps();
    }
    public function manejo_enfermedades(){
    	return $this->belongsToMany('App\ManejoEnfermedad','plantacion__manejo_enfermedads','id_plantacion','id_manejoenfermedad')->withTimestamps();
    }
    public function fertilizantes(){
    	return $this->belongsToMany('App\Fertilizante','plantacion__fertilizantes','id_plantacion','id_fertilizante')->withTimestamps();
    }
    public function tutores(){
    	return $this->belongsToMany('App\Tutor','plantacion__tutors','id_plantacion','id_tutor')->withTimestamps();
    }
    public function asociados(){
    	return $this->belongsToMany('App\CultivoAsociado','plantacion__asociados','id_plantacion','id_asociado')->withTimestamps();
    }
}
