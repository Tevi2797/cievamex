<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaracteristicasMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caracteristicas_municipios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Boolean('escuelas')->nulleable();
            $table->Boolean('salud')->nulleable();
            $table->Boolean('pavimento')->nulleable();
            $table->Boolean('alumbrado')->nulleable();
            $table->Boolean('transporte')->nulleable();
            $table->Boolean('red_movil')->nulleable();
            $table->Boolean('potable')->nulleable();
            $table->Boolean('alcantarillado')->nulleable();
            $table->Boolean('drenaje')->nulleable();
            $table->Boolean('electricidad')->nulleable();
            $table->Boolean('residuos')->nulleable();
            $table->Boolean('gas')->nulleable();
            $table->Boolean('seguridad')->nulleable();
            $table->Boolean('abastos')->nulleable();
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
        Schema::dropIfExists('caracteristicas_municipios');
    }
}
