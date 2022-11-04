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
        Schema::create('recorridos', function (Blueprint $table) {
            $table->id();
            $table->string('code',4);
            $table->float('tiempo');
            $table->float('distancia');
            $table->float('velocidad');
            $table->string('color', 10);
            $table->tinyInteger('grosor');
            $table->string('descripcion', 50);
            $table->unsignedBigInteger('linea_id')->nullable();
            $table->foreign('linea_id')->references('id')->on('lineas');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recorridos');
    }
};
