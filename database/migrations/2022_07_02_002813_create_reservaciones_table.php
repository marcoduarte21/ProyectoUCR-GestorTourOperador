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
        Schema::create('reservaciones', function (Blueprint $table) {
            $table->id('numeroDeReserva');
            $table->string('numeroDeVuelo');
            $table->date('fecha');
            $table->integer('monto');
            $table->integer('NumeroDePasajeros');
            $table->text('observaciones'); //textarea

            $table->timestamps(); // created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservaciones');
    }
};
