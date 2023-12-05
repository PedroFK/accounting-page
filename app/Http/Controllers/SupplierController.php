<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = [
            0=> [
                'name' => 'Forncedor 1',
                'ddd' => '11'
            ],
            1=> [
                'name' => 'Forncedor 2',
                'ddd' => '85'
            ],
            2=> [
                'name' => 'Forncedor 3',
                'ddd' => '32'
            ],
        ];

        return view('app.supplier.index', compact('suppliers'));
    }
}
