<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',255); // Esse campo espera um texto
            $table->decimal('custo',19,2); // Esse campo espera um número do tipo decimal
            $table->decimal('preco',19,2); // Esse campo espera um número do tipo decimal
            $table->integer('quantidade'); // Esse campo espera um número do tipo inteiro
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
        Schema::dropIfExists('produtos');
    }
}
