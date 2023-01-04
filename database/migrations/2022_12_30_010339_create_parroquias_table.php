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
        Schema::create('parroquias', function (Blueprint $table) {
            $table->string('codigo',6)->primary();
            $table->string('descripcion');
            $table->string('id_provincia', 2)->nullable();
            $table->string('id_canton', 4)->nullable();
           
            $table->foreign('id_provincia')->references('codigo')->on('provincias');
            $table->foreign('id_canton')->references('codigo')->on('cantones');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroquias');
    }
};
