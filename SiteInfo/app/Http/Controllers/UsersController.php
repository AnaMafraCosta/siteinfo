<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function store(Request $request){
        $user = new User;
        $user->firstname = $request->post('firstname');
        $user->lastname = $request->post('lastname');
        $user->email = $request->post('email');
        $user->password = $request->post('password');
        $user->save();
        return redirect()->to(route('register'));
    }
}
