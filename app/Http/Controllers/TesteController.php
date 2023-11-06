<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
  public function teste(int $param1, int $param2) {
    // echo 'A soma dos paramtros é: '.($param1+$param2);
    // Podemos passar os parâmetros para a view de 3 formas:

    // return view('site.teste', ['p1' => $param1,'p2'=> $param2]); // Array associativo

    return view("site.teste", compact("p1","p2")); // Compact

    // return view("site.teste")->with('p1', $param1)->with('p2', $param2); // with
  }
};
