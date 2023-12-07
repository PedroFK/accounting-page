<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_reasons', function (Blueprint $table) {
            $table->id();
            $table->string('contact_reason', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_reasons');
    }
};
