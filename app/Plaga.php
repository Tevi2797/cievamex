<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plaga extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion',
    ];

    public function plantaciones(){
    	return $this->belongsToMany('App\Plantacion');
    }
}
