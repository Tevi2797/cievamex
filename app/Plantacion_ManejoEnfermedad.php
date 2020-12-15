<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plantacion_ManejoEnfermedad extends Model
{
    //
    protected $fillable = [
        'id_manejoenfermedad','id_plantacion'
    ];
}
