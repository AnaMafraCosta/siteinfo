<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index () {
        //retorna página do dashboard para o usuário

        //checar o tipo de usuário

        //retornar página normal, ou página admin
    }

    
    public function profile () {
        //ver o próprio perfil

        //aqui é o local onde o usuário pode ver o perfil dele

        return view ('usuarios.perfil-usuario');
    }

    public function edit (Request $request, User $user) {
        //aqui o usuário recebe um formulário para editar 
        //os seus dados

        //return view ('form')
    }

    public function udpate (Request $request, User $user) {

        //aqui o usuário recebe os dados do form relacionados
        //ao form de edit.

        //return redirect --> profile

    }

}
