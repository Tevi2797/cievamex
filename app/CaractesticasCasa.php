<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaractesticasCasa extends Model
{
    //
     protected $fillable = [
        'plantas','sala','comedor','cocina','cuartos','baños','patio','cochera',
    ];

     public function casa(){
        return $this->belongsTo('App\Casa');
    }
}
