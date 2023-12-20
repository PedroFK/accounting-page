<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        return view('site.login');
    }
    
    public function authenticate() {
        return view('site.login');
    }
}
