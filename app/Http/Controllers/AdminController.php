<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        //retorna página do dashboard para o usuário

        //checar o tipo de usuário

        //retornar página normal, ou página admin

        return view('usuarios.admin.admin');
    }


    public function cadastrados()
    {
        $lista = User::all();

        return view('usuarios.admin.users-cadastrados',['users'=>$lista]);
    }

    public function solicitacoes()
    {
        $lista = User::all();

        return view('usuarios.admin.solicitacoes-internos',['users'=>$lista]);
    }


    public function show(User $user, $id) {
        
            $usuario = User::find($id);
            return view('usuarios.admin.showUser', ['user' => $usuario]); 
    }
}
