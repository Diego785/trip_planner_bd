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
        Schema::create('rutas', function (Blueprint $table) {
            $table->smallInteger('id');
            $table->string('Shape', 5);
            $table->string('FID_stops2', 4);
            $table->float('Longi');
            $table->float('Lati');
            $table->string('Punto', 4);
            $table->string('Tipo', 1);
            $table->string('code', 5);
            $table->smallInteger('orden');
            $table->string('PuntoD', 4);
            $table->float('LongiD');
            $table->float('LatiD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rutas');
    }
};
