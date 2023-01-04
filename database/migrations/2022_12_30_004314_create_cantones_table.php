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
        Schema::create('cantones', function (Blueprint $table) {
            $table->string('codigo',4)->primary();
            $table->string('descripcion');
            $table->string('id_provincia', 2)->nullable();

            $table->foreign('id_provincia')->references('codigo')->on('provincias');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cantones');
    }
};
