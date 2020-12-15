<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantacionAsociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantacion__asociados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('id_asociado')->unsigned();
            $table->BigInteger('id_plantacion')->unsigned();
            $table->foreign('id_asociado')->references('id')->on('cultivo_asociados')->onDelete('cascade');
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
        Schema::dropIfExists('plantacion__asociados');
    }
}
