<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0=> [
                'nome' => 'Forncedor 1',
                'ddd' => '11'
            ],
            1=> [
                'nome' => 'Forncedor 2',
                'ddd' => '85'
            ],
            2=> [
                'nome' => 'Forncedor 3',
                'ddd' => '32'
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
