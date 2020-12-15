<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantaciones_Plagas extends Model
{
    //
    protected $fillable = [
        'id_plaga','id_plantacion','fecha_inicio','fecha_fin',
        
    ];
}
