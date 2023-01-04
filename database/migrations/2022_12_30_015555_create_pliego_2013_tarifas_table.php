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
        Schema::create('pliego_2013_tarifas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_pliego')->nullable();
            $table->unsignedBigInteger('id_tarifa')->nullable();
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
            $table->decimal('nivel_voltaje', $precision = 8 , $scale=2 );
            
            
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
        Schema::dropIfExists('pliego_2013_tarifas');
    }
};
