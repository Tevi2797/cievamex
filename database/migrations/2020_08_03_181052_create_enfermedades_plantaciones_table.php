<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadesPlantacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades_plantaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('id_enfermedad')->unsigned();
            $table->BigInteger('id_plantacion')->unsigned();
            $table->Date('fecha_inicio')->nulleable();
            $table->Date('fecha_fin')->nulleable();
            $table->foreign('id_enfermedad')->references('id')->on('enfer_plantas')->onDelete('cascade');
            $table->foreign('id_plantacion')->references('id')->on('plantacions')->onDelete('cascade');
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
        Schema::dropIfExists('enfermedades_plantaciones');
    }
}
