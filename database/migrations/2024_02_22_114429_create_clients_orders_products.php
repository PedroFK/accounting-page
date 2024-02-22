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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->timestamps();
        });
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->constrained();
            $table->timestamps();
        });
        Schema::create('orders_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("order_id")->constrained();
            $table->foreignId("product_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_products');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('clients');
    }
};
