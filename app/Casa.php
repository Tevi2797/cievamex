<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    //
    protected $fillable = [
        'material','piso','techo','combustible','id_servequip','id_caractcasa',
    ];

     public function productor(){
        return $this->belongsTo('App\Productor','id_estatuscasa','id');
    }

    public function servicios(){
        return $this->hasOne('App\ServiciosEquipamiento','id','id_servequip');
    }
     public function caracteristicascasa(){
        return $this->hasOne('App\CaractesticasCasa','id','id_caractcasa');
    }
}
