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
    
    public function list(Request $request) {
        if  ($request->input('_token') != '') {
            $suppliers = Supplier::where('name','like', '%'.$request->input('name').'%')
            ->where('site','like', '%'.$request->input('site').'%')
            ->where('state','like', '%'.$request->input('state').'%')
            ->where('email','like', '%'.$request->input('email').'%')
            ->get();
        }
        return view('app.supplier.list', ['suppliers' => $suppliers]);
    }

    public function add(Request $request) {
        $msg = '';

        if  ($request->input('_token') != '') {
            $rules = [
                'name'  => 'required|min:3',
                'site'  => 'required',
                'state'  => 'required|min:2',
                'email'  => 'required|email',
            ];

            $messages = [
                'name.required'  =>  'O campo nome é obrigatório.',
                'site.required'  =>  'O campo site é obrigatório.',
                'state.required'  =>  'O campo Estado é obrigatório.',
                'email.required'  =>  'O campo email é obrigatório.',
                'name.min'  =>  'O campo nome deve conter no mínimo dois caracteres.',
                'email.email'  =>  'O campo email deve ser um email válido.'
            ];

            $request->validate($rules, $messages);
             
            $supplier = new Supplier();
            $supplier->create($request->all());
            $msg = 'Cadastro realizado com sucesso';
        }
        return view('app.supplier.add', ['msg' => $msg]);
        
    }
}
