<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $fillable = [
       'calle','numero','colonia','id_municipio','localidad','ejido','referencia',
    ];

    public function productor(){
        return $this->belongsTo('App\Productor','id','id_direccion');
    }
    public function municipios(){
        return $this->belongsTo('App\Municipio','id_municipio','id');
    }
    
}
