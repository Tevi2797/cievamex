<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    //
    
     protected $fillable = [
        'nombre','apellid_pat','apellid_mat','edad','nacimiento',
        'parentesco','escolaridad','ingreso','gasto','id_productor',
    ];

    public function enfermedades(){

    	return $this->belongsToMany('App\Enfermedades');
    }
}
