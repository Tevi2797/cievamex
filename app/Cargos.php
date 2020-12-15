<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion',
    ];


    public function usuario(){
    	return $this->belogsTo('App\User','id_cargo','id');
    }
}
