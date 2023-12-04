<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $supplier = new Supplier();
        $supplier->name='JF Bike';
        $supplier->site='bicicleta.com';
        $supplier->state ='ES';
        $supplier->email='jfbike@gmail.com';
        $supplier->save();
        
        Supplier::create([
            'name'=>'fornecedor200',
            'site'=>'fornecedor200.com',
            'state'=>'MG',
            'email'=>'fornecedor200@gmail.com',   
        ])

        
    }
}
