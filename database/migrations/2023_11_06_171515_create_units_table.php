<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Definindo as unidades que seraop usadas nas colunas
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('units');
    }
};
