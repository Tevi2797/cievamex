<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParcelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('latitud');
            $table->String('longitud');
            $table->String('altitud');
            $table->Double('ha');
            $table->Double('pendiente');
            $table->String('localidad');
            $table->unsignedBigInteger('id_tiposuelo');
            $table->unsignedBigInteger('id_riego');
            $table->unsignedBigInteger('id_municipio');
            $table->unsignedBigInteger('id_productor');


            $table->foreign('id_tiposuelo')->references('id')->on('tipo_suelos')->onDelete('restrict');
            $table->foreign('id_riego')->references('id')->on('riegos')->onDelete('restrict');
            $table->foreign('id_municipio')->references('id')->on('municipios')->onDelete('restrict');
            $table->foreign('id_productor')->references('id')->on('productors')->onDelete('cascade');
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
        Schema::dropIfExists('parcelas');
    }
}
