<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome='JF Bike';
        $fornecedor->site='bicicleta.com';
        $fornecedor->uf='ES';
        $fornecedor->email='jfbike@gmail.com';
        $fornecedor->save();
        
        Fornecedor::create([
            'nome'=>'fornecedor200',
             'site'=>'fornecedor200.com',
             'uf'=>'MG',
             'email'=>'fornecedor200@gmail.com',   
        ]);

        
    }
}
