<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::all();

        return view('app.supplier.index', ['suppliers' => $suppliers]);
    }
}
