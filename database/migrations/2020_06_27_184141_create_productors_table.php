<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('apellido_pat');
            $table->String('apellido_mat');
            $table->Integer('edad');
            $table->String('sexo');
            $table->Double('ingreso')->nulleable();
            $table->Double('gasto')->nulleable();
            $table->String('escolaridad');
            $table->unsignedBigInteger('id_direccion');
            $table->unsignedBigInteger('id_acteconomica');
            $table->String('seguro');
            $table->unsignedBigInteger('id_estatuscasa');
            $table->Boolean('jefe_familia')->nulleable();
            $table->String('estado_civil')->nulleable();

            $table->foreign('id_direccion')->references('id')->on('direccions')->onDelete('cascade');
            $table->foreign('id_acteconomica')->references('id')->on('actividad_economicas')->onDelete('cascade');
            $table->foreign('id_estatuscasa')->references('id')->on('casas')->onDelete('cascade');
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
        Schema::dropIfExists('productors');
    }
}
