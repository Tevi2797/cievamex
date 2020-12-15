<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('estado')->nulleable();
            $table->String('material')->nulleable();
            $table->String('piso')->nulleable();
            $table->String('techo')->nulleable();
            $table->String('combustible')->nulleable();
            $table->unsignedBigInteger('id_servequip');
            $table->unsignedBigInteger('id_caractcasa');

            $table->foreign('id_servequip')->references('id')->on('servicios_equipamientos')->onDelete('cascade');
            $table->foreign('id_caractcasa')->references('id')->on('caractesticas_casas')->onDelete('cascade');

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
        Schema::dropIfExists('casas');
    }
}
