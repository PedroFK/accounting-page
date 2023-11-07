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
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->string('site', 70)->after('nome')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fornecedors', function (Blueprint $table) {
            $table->dropColumn('site');
        });
    }
};
