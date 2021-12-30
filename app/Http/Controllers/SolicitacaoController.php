<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitacao;

class SolicitacaoController extends Controller
{
    public function index(){
        $lista = Solicitacao::all();
        return view('usuarios.admin.solicitacoes-internos', ['solicitacoes' => $lista]);
    }
    
    public function store(Request $request) {
        $solicitation = new Solicitacao;
        $solicitation->user_id = $request->post('user_id');
        $solicitation->name = $request->post('name');
        $solicitation->email = $request->post('email');
        $solicitation->save();
        $request->session()->flash('mensagem', "Informações do livro  forão atualizadas");
        return "Solicitção Enviada!";
    }
}
