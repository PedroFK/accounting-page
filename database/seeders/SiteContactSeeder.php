<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContact;
use App\Models\ContactReason;

class SiteContactSeeder extends Seeder
{
    public function run(): void
    {
        /*
        SiteContact::create([
            'name'=>'pedro',
             'phone_1'=>'27 9999999',
             'email'=>'pedroctt@gmail.com',  
             'contact_reason'=>'1',
             'message'=>'teste mensagem',
        ]);
        */

        $contactReasons = ContactReason::all();

        foreach ($contactReasons as $contactReason) {
            SiteContact::Factory()
            ->count(3)
            ->state(['contact_reason_id' => $contactReason->id])
            ->create();
        }
    }
}
