<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->date('nascimento');
            $table->string('email');
            $table->string('sexo');
            $table->integer('diabetico');
            $table->integer('hipertensao');
            $table->bigInteger('cep');
            $table->string('logradouro');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');            
            $table->string('password');
            $table->char('nivel');
            $table->string('complemento')->nullable();
            $table->string('remember_token')->nullable();
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
        Schema::dropIfExists('usuarios');
    }
}
