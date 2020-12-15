<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('calle');
            $table->String('numero');
            $table->String('colonia')->nulleable();
            $table->unsignedBigInteger('id_municipio');
            $table->String('localidad');
            $table->String('ejido')->nulleable();
            $table->String('referencia');
            $table->foreign('id_municipio')->references('id')->on('municipios')->onDelete('cascade');
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
        Schema::dropIfExists('direccions');
    }
}
