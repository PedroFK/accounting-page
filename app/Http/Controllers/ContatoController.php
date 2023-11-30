<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        $motivo_contatos = [ 
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];
        
        return view('site.contato', ['titulo' => 'contato (teste)', 'motivo_contatos' => $motivo_contatos]);

        /*
        $request->all();
        Posso selecionar apenas um input
        $request->input('nome');
        

        $contato = new SiteContato();
        $contato->fill($request->all());
        $contato->save();
        */
        //print_r($contato->getAttributes());



    }

    public function save(Request $request) {
        $request->validate([
            'nome'           => 'required|string|max:40|unique:site_contatos,nome',
            'telefone'       => 'required|string|max:12',
            'email'          => 'required|email',
            'motivo_contato' => 'required|string',
            'mensagem'       => 'required|string|max:255',
        ]);
    }
}
