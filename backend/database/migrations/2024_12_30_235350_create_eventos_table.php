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
        Schema::create('eventos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 50)->nullable();
            $table->text('descricao')->nullable();
            $table->dateTime('data_inicio')->nullable();
            $table->dateTime('data_final')->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('cep', 20)->nullable();
            $table->string('organizador', 50)->nullable();
            $table->string('email_contato', 150)->nullable();
            $table->string('telefone_contato', 50)->nullable();
            $table->longText('imagem_evento')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('eventos');
    }
};
