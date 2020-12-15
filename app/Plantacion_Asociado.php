<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantacion_Asociado extends Model
{
    //
     protected $fillable = [
        'id_asociado','id_plantacion',
    ];
}
