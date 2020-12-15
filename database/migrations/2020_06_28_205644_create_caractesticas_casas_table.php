<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaractesticasCasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caractesticas_casas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('plantas')->nulleable();
            $table->Boolean('sala')->nulleable();
            $table->Boolean('comedor')->nulleable();
            $table->Boolean('cocina')->nulleable();
            $table->Integer('cuartos')->nulleable();
            $table->Integer('baños')->nulleable();
            $table->Boolean('patio')->nulleable();
            $table->Boolean('cochera')->nulleable();
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
        Schema::dropIfExists('caractesticas_casas');
    }
}
