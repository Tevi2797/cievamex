<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosEquipamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_equipamientos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Boolean('electricidad')->nulleable();
            $table->Boolean('drenaje')->nulleable();
            $table->Boolean('potable')->nulleable();
            $table->Boolean('gas')->nulleable();
            $table->Boolean('lavadora')->nulleable();
            $table->Boolean('refrigerador')->nulleable();
            $table->Boolean('television')->nulleable();
            $table->Boolean('telefono')->nulleable();
            $table->Boolean('celular')->nulleable();
            $table->Boolean('microondas')->nulleable();
            $table->Boolean('radio')->nulleable();
            $table->Boolean('dvd')->nulleable();
            $table->Boolean('computadora')->nulleable();
            $table->Boolean('internet')->nulleable();
            $table->Boolean('automovil')->nulleable();
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
        Schema::dropIfExists('servicios_equipamientos');
    }
}
