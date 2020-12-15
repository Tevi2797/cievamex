<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->unsignedBigInteger('id_estado');
            $table->unsignedBigInteger('id_caracmunicipio');
            $table->foreign('id_estado')->references('id')->on('estados');
            $table->foreign('id_caracmunicipio')->references('id')->on('caracteristicas_municipios')->onDelete('cascade');
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
        Schema::dropIfExists('municipios');
    }
}
