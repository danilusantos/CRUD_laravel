<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('cliente_id');
            $table->string('nome');
            $table->decimal('telefone', 11, 0)->nullable();
            $table->string('cpf', 11)->unique();
            $table->date('data_nascimento');
            $table->string('cep', 8);
            $table->string('endereco', 50);
            $table->char('estado', 2);
            $table->string('cidade', 30);
            $table->string('bairro', 20);
            $table->string('numero', 10);
            $table->string('complemento', 30)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
