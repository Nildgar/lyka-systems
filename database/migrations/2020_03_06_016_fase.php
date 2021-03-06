<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fase extends Migration
{
    public function up()
    {
        Schema::create('Fase', function (Blueprint $table) {
            $table->charset = 'latin1';
            $table->collation = 'latin1_swedish_ci';
            $table->bigIncrements('idFase');
            $table->string('descricao',255);
            $table->dateTime('dataVencimento');
            $table->decimal('valorFase', 18, 2);
            $table->boolean('verificacaoPago')->default(false);
            $table->string('icon', 100)->nullable();
            $table->enum('estado', ['Pendente', 'Pago', 'Dívida', 'Crédito'])->default('Pendente');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('idProduto');
                $table->foreign('idProduto')->references('idProduto')->on('Produto');
            $table->timestamps();
            $table->softDeletes();
            });
    }

    public function down()
    {
        Schema::dropIfExists('Fase');
    }
}
