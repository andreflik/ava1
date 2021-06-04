<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsuarioController extends Controller
{
    public function create() {
        return view ('welcome');
    }

    public function store(Request $request) {
        User::create([
            'nome'=> $request->nome,
            'cpf'=> $request->cpf,
            'rg'=> $request->rg,
            'telefone'=> $request->telefone,
            'cidade' => $request->cidade,
            'nasc' => $request->nasc
        ]);
        return ('Usuário criado com sucesso');
        
    }

}
