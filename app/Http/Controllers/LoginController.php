<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }
    
    public function authenticate(Request $request) {
        $rules = [
            'user'     => 'required|email',
            'password' => 'required'
        ];

        $messages = [
            'user.required' =>  'O usuário é obrigatório.',
            'user.email' =>  'Deve ser um email valido.',  
            'password.required' =>  'A senha é obrigatória.',  
        ];

        $request->validate($rules, $messages);

        Print_r($request->all());
    }
}
