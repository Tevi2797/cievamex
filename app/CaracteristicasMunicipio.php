<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaracteristicasMunicipio extends Model
{
    //
    protected $fillable = [
        'escuelas','salud','pavimento','alumbrado','transporte','red_movil','potable',
        'alcantarillado','drenaje','electricidad','residuos','gas','seguridad','abastos',
    ];


    public function municipio(){
        return $this->belongsTo('App\Municipio','id_caractcasa','id');
    }
}
