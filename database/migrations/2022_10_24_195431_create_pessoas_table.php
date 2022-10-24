<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 180);
            $table->string('cpf_cnpj', 25);
            $table->string('rg', 10);
            $table->date('data_nascimento');
            $table->string('estado_civil', 20);
            $table->string('cep', 11);
            $table->string('rua', 150);
            $table->string('estado', 2);
            $table->string('bairro', 100);
            $table->string('complemento', 50);
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
        Schema::dropIfExists('pessoas');
    }
}
