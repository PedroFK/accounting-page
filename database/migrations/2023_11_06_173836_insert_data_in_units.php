<?php

use App\Models\Unit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Unit::create(['name' => 'unidade', 'abbreviation' => 'un']);
        Unit::create(['name' => 'quilograma', 'abbreviation' => 'Kg']);
        Unit::create(['name' => 'metros', 'abbreviation' => 'm']);
        Unit::create(['name' => 'litros', 'abbreviation' => 'L']);
        Unit::create(['name' => 'gramas', 'abbreviation' => 'g']);
    }

    
    public function down(): void
    {
        Unit::query()->delete();
    }
};
