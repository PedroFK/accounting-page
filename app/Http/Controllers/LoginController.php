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
        $erro = '';
        if ($request->get('erro') == 1) {
            $erro = 'A senha está incorreta';
        }
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro] );
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

        echo "Usuário: $email | Senha: $password";
        
        $user = User::where('email', $email)
            	->where('password', $password)
                ->get()
                ->first();

        if (!empty($user)) {
            echo "</br>";
            echo "User existe";
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }

        echo '<pre>';
        print_r($user);
        '</pre>';
    }
}
