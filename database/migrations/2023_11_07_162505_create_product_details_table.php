<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_details', function (Blueprint $table) {
            // Colunas
            $table->id();
            $table->foreignId('product_id')->constrained();
            $table->foreignId('unit_id')->constrained();
            $table->float('length', 8, 2);
            $table->float('height', 8, 2);
            $table->float('width', 8, 2);
            $table->timestamps();
            $table->unique('product_id'); // O valor do p_id é unico, nao se repete
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
