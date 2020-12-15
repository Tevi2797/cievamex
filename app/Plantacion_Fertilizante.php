<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantacion_Fertilizante extends Model
{
    //
    protected $fillable = [
        'id_fertilizante','id_plantacion',
    ];
}
