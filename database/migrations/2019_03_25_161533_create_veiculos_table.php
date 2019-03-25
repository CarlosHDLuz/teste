<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->increments('id');

            //Placa
            $table->string('placa');    // abc-1234
            //Renavam
            $table->string('renavam');  // 00123456789
            //Modelo
            $table->string('modelo');
            //Marca
            $table->string('marca');
            //Ano
            $table->integer('ano');     // 2019
            //Proprietário
            $table->string('proprietário');
            /*Todas as vezes que um veículo for cadastrado(created_at)
            ou editado(updated_at), deverá ser enviado um e-mail para
            o proprietário.
            */
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
