<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    public function run(): void
    {
        /*
        SiteContato::create([
            'nome'=>'pedro',
             'telefone'=>'27 9999999',
             'email'=>'pedroctt@gmail.com',  
             'motivo_contato'=>'1',
             'mensagem'=>'teste mensagem',
        ]);
        */

        SiteContato::Factory()->count(10)->create();
    }
}
