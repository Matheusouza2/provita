<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exames', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('apelido');
            $table->bigInteger('paciente')->unsigned();
            $table->bigInteger('laboratorio')->unsigned();
            $table->date('data');
            $table->foreign('paciente')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('laboratorio')
                ->references('id')
                ->on('laboratorios')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('exames');
    }
}