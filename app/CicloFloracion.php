<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CicloFloracion extends Model
{
    //
     protected $fillable = ['año',
        'inicio_floracion','fin_floracion','dias_floracion','recomendada',
        'daño','caida_prematura','fecha_cosecha',
        'edad_fruto','produccion','perdida_estimada',
        'rendimiento_estimado'
    ];

    public function plantacion(){
    	return $this->belongsTo('App\Plantacion','id_plantacion','id');
    }
}
 