<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create("affiliate_product", function (Blueprint $table) {
            $table->id();
            $table->foreignId("affiliate_id")->constrained();
            $table->foreignId("product_id")->constrained();
            $table->decimal("sale_price", 8, 2);
            $table->integer("min_stock")->default(1);;
            $table->integer("max_stock")->default(1);;
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists("affiliate_product");
    }
};
