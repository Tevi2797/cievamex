<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productor extends Model
{
    //
    protected $fillable = [
        'nacionalidad','nombre','apellido_pat','apellido_mat','nacimiento','sexo','telefono','seguro','enfermedad','ingreso',
        'gasto',
        'id_direccion','id_acteconomica','id_estatuscasa','jefe_familia','estado_civil',
    ];

     public function actividad(){
        return $this->belongsTo('App\ActividadEconomica','id_acteconomica','id');
    } 
    public function direccion(){
        return $this->hasOne('App\Direccion','id','id_direccion');
    }

     public function casaProductor(){
        return $this->hasOne('App\Casa','id','id_estatuscasa');
    }

    public function parcela(){
        return $this->belongsTo('App\Parcela','id_productor','id');
    }

    public function muni_produ(){
        return $this->hasManyThrough(
            'App\Municipio',
            'App\Direccion',
            'id_municipio',
            'id',
            'id'
            );
    }



}
