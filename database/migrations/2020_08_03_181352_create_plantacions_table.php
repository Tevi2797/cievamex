<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cantidad');
            $table->Integer('año');
            $table->unsignedBigInteger('id_especie');
            $table->unsignedBigInteger('id_tipoplantacion');
            $table->unsignedBigInteger('id_ciclo');
            $table->unsignedBigInteger('id_parcela');

            $table->foreign('id_parcela')->references('id')->on('parcelas')->onDelete('cascade');
            $table->foreign('id_especie')->references('id')->on('especies')->onDelete('restrict');
            $table->foreign('id_tipoplantacion')->references('id')->on('tipo_plantacions')->onDelete('restrict');
            $table->foreign('id_ciclo')->references('id')->on('ciclo_floracions')->onDelete('cascade');
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
        Schema::dropIfExists('plantacions');
    }
}
