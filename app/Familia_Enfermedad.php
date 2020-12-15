<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia_Enfermedad extends Model
{
    //
    public $table ='enfermedades_familia';
    protected $fillable=['familia_id','enfermedades_id'];
}