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
            $table->string('cpf_cnpj', 25)->nullable();
            $table->string('rg', 10)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('estado_civil', 20)->nullable();
            $table->string('cep', 11)->nullable();
            $table->string('rua', 150)->nullable();
            $table->string('estado', 2)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('complemento', 50)->nullable();
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
