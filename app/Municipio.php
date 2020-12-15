<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    //
    protected $fillable = [
        'nombre','id_estado','id_caracmunicipio',
    ];


    public function estado(){
        return $this->belongsTo('App\Estados','id_estado','id');
    }

     public function direccion(){
        return $this->hasMany('App\Direccion','id','id_municipio');
    }

    public function caracteristicasMuni(){
        return $this->hasOne('App\CaracteristicasMunicipio');
    }

    public function parcela(){
        return $this->belongsTo('App\Parcela','id_municipio','id');
    }
    
}
