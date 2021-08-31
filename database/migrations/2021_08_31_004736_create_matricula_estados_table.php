<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculaEstadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula_estados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('matricula_id');
            $table->foreign('matricula_id')->references('id')->on('matriculas');
            $table->unsignedBigInteger('estado_matricula_id');
            $table->foreign('estado_matricula_id')->references('id')->on('estado_matriculas');
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
        Schema::dropIfExists('matricula_estados');
    }
}
