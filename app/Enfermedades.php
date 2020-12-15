<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedades extends Model
{
    //
    protected $fillable = [
        'nombre'
    ];

     public function familiares(){
    	return $this->belongsToMany('App\Familia');
    }
}
