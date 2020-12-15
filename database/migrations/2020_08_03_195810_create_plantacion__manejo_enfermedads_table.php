<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantacionManejoEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantacion__manejo_enfermedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('id_manejoenfermedad')->unsigned();
            $table->BigInteger('id_plantacion')->unsigned();
            $table->Date('fecha_inicio')->nulleable();
            $table->Date('fecha_fin')->nulleable();
            $table->foreign('id_manejoenfermedad')->references('id')->on('manejo_enfermedads')->onDelete('cascade');
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
        Schema::dropIfExists('plantacion__manejo_enfermedads');
    }
}
