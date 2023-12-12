<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('site_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('phone_1', 20);
            $table->string('email', 80);
            $table->foreignId('contact_reason_id')->constrained();
            $table->string('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('site_contacts');
    }
};
