<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->string('parentezco');
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
        Schema::dropIfExists('estudiante_persona');
    }
}
