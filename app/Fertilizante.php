<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fertilizante extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion',
    ];

    public function plantaciones(){
    	return $this->belongsToMany('App\Plantacion');
    }
}
