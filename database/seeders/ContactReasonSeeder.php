<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContactReason;

class ContactReasonSeeder extends Seeder
{
    public function run(): void
    {
        ContactReason::create(['contact_reason' => 'Dúvida']);
        ContactReason::create(['contact_reason' => 'Elogio']);
        ContactReason::create(['contact_reason' => 'Reclamação']);
    }
}
