<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Riego extends Model
{
    //
    protected $fillable = [
        'nombre','descripcion',
    ];

    public function parcela(){
    	return $this->belongsTo('App\Parcela','id_riego','id');
    }
}
