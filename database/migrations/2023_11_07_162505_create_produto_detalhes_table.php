<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produto_detalhes', function (Blueprint $table) {
            // Colunas
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->float('comprimento', 8, 2);
            $table->float('altura', 8, 2);
            $table->float('largura', 8, 2);
            $table->timestamps();
            // Constraint
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->unique('produto_id'); // O valor do p_id é unico, nao se repete
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produto_detalhes');
    }
};
