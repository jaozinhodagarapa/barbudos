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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->integer('profissionalId',)->nullable(false);
            $table->integer('clienteId',)->nullable(false);
            $table->integer('servicoId',)->nullable(false);
            $table->integer ('datahora', )->nullable(false);
            $table->date('tipopagamento',20 )->nullable(false);
            $table->decimal('valor',)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendas');
    }
};
