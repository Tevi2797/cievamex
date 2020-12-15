<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadEconomica extends Model
{
    //

     protected $fillable = [
        'nombre','descripcion',
   	 ];


    public function productor(){
        return $this->hasOne('App\Productor','id','id_acteconomica');
    }
}
