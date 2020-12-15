<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('nombre');
            $table->String('apellido_pat');
            $table->String('apellido_mat');
            $table->Integer('edad');
            $table->Date('nacimiento');
            $table->String('parentesco');
            $table->String('escolaridad');
            $table->Double('ingreso')->nulleable();
            $table->Double('gasto')->nulleable();
            $table->unsignedBigInteger('id_productor');

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
        Schema::dropIfExists('familias');
    }
}
