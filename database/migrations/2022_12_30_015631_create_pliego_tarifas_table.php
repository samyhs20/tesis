<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pliego_tarifas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_pliego')->nullable();
            $table->unsignedBigInteger('id_tarifa')->nullable();
            $table->string('id_demanda');
            $table->string('id_validacion');
            $table->decimal('nivel_voltaje', $total = 8 , $places=2 );
            $table->decimal('comercial', $precision = 8 , $scale=2 );
            $table->decimal('demanda', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia1', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia2', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia3', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia4', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia5', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia6', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia7', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia8', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia9', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia10', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia11', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia12', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia13', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia14', $precision = 8 , $scale=2 );
            $table->decimal('cargo_energia15', $precision = 8 , $scale=2 );
            $table->string('validacion_ap');
            $table->decimal('comercial_ap', $precision = 8 , $scale=2 );
            $table->decimal('demanda_ap', $precision = 8 , $scale=2 );
            $table->string('nivel_voltaje_ap');
            $table->decimal('rango1', $precision = 8 , $scale=2 );
            $table->decimal('rango2', $precision = 8 , $scale=2 );
            $table->decimal('rango3', $precision = 8 , $scale=2 );
            $table->decimal('rango4', $precision = 8 , $scale=2 );
            $table->decimal('rango5', $precision = 8 , $scale=2 );
            $table->decimal('rango6', $precision = 8 , $scale=2 );
            $table->decimal('rango7', $precision = 8 , $scale=2 );
            $table->decimal('rango8', $precision = 8 , $scale=2 );
            $table->decimal('rango9', $precision = 8 , $scale=2 );
            $table->decimal('rango10', $precision = 8 , $scale=2 );
            $table->decimal('rango11', $precision = 8 , $scale=2 );
            $table->decimal('rango12', $precision = 8 , $scale=2 );
            $table->decimal('rango13', $precision = 8 , $scale=2 );
            $table->decimal('rango14', $precision = 8 , $scale=2 );
            $table->decimal('rango15', $precision = 8 , $scale=2 );

            $table->foreign('id_tipo_pliego')->references('id')->on('tipo_pliegos');
            $table->foreign('id_tarifa')->references('id')->on('tarifas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pliego_tarifas');
    }
};
