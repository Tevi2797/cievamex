<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaEnfermedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfermedades_familia', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->BigInteger('enfermedades_id')->unsigned();
            $table->BigInteger('familia_id')->unsigned();

            $table->foreign('enfermedades_id')->references('id')->on('enfermedades')->onDelete('cascade');
            $table->foreign('familia_id')->references('id')->on('familias')->onDelete('cascade');

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
        Schema::dropIfExists('familia__enfermedads');
    }
}
