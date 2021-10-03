<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    //recuperar todas tarefas
    //mostrar ao usuário
    public function index()
    {
        
        return view('dashboard.tarefa.home');
    }

    public function create()
    {
        return view ('dashboard.tarefa.create');
    }

    public function store(Request $request)
    {
      
       $user = new user;
       $user->name = $request->post('First Name');
       $user->save();

        //redirecioamento para página inicial
       return redirect()->to(route('tarefa.index'));

    }

    public function show($id)
    {
        $user = user::find($id);
        if ($user) {
            return view('dashboard.tarefa.show', ['tarefa'=>$tarefa]);
        } else {
            return redirect()->to(route('tarefa.index'));
        }
    }

}
