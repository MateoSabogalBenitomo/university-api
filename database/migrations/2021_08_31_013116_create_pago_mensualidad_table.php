<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoMensualidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_mensualidad', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('matricula_id');
            $table->foreign('matricula_id')->references('id')->on('matriculas');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->decimal('costo_consumo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_mensualidad');
    }
}
