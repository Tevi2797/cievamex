<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantacionesPlagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantaciones__plagas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('id_plaga')->unsigned();
            $table->BigInteger('id_plantacion')->unsigned();
            $table->Date('fecha_inicio')->nulleable();
            $table->Date('fecha_fin')->nulleable();
            $table->foreign('id_plaga')->references('id')->on('plagas')->onDelete('cascade');
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
        Schema::dropIfExists('plantaciones__plagas');
    }
}
