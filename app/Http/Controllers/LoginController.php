<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(Request $request) {
        $error = '';
        if ($request->get('error') == 1) {
            $error = 'A senha está incorreta';
        }

        if ($request->get('error') == 2) {
            $error = 'Faça login para ter acesso!';
        }
        return view('site.login', ['titulo' => 'Login', 'error' => $error] );
    }
    
    public function authenticate(Request $request) {
        $rules = [
            'user'     => 'required|email|exists:users,email',
            'password' => 'required'
        ];

        $messages = [
            'user.required' =>  'O usuário é obrigatório.',
            'user.email' =>  'Deve ser um email valido.',  
            'user.exists' =>  'Deve ser um email cadastrado',  
            'password.required' =>  'A senha é obrigatória.',  
        ];

        $request->validate($rules, $messages);

        $email = $request->get('user');
        $password = $request->get('password');

        $user = User::where('email', $email)
            	->where('password', $password)
                ->get()
                ->first();

        if (!empty($user)) {
            $_SESSION['name'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('app.client');
        } else {
            return redirect()->route('site.login', ['error' => 1]);
        }
    }

    public function exit() {
        echo 'sair';
    }
}
