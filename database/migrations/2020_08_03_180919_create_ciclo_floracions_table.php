<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCicloFloracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_floracions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Date('inicio_floracion');
            $table->Date('fin_floracion');
            $table->Integer('dias_floracion');
            $table->Date('recomendada');
            $table->String('daño');
            $table->Double('caida_prematura');
            $table->Date('fecha_cosecha');
            $table->Double('edad_fruto');
            $table->Double('produccion');
            $table->Double('perdida_estimada');
            $table->Date('rendimiento_estimado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ciclo_floracions');
    }
}
