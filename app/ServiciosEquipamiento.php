<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosEquipamiento extends Model
{
    //
    protected $fillable = [
        'electricidad','drenaje','potable','gas','lavadora','refrigerador','television',
        'telefono','celular','microondas','radio','dvd','computadora',
        'internet','automovil',
    ];

     public function casa(){
        return $this->belongsTo('App\Casa','id_servequip','id');
    }
}
