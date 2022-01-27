@extends('layouts.auth')

@section('titulo')
    Login - Usuário
@endsection

@section('mensagem')
    Bem-vindo de volta!
@endsection

@section('form')
<form class="user" action="{{route('login')}}" method="POST" >
    @csrf
    <div class="form-group">
        <input type="email" class="form-control form-control-user"
            id="email" name="email" aria-describedby="emailHelp"
            placeholder="Insira o endereço de email">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"
            id="password" name="password" placeholder="Senha">
    </div>
    <div class="form-group">
        <div class="custom-control custom-checkbox small">
            <input type="checkbox" class="custom-control-input" id="customCheck">
            <label class="custom-control-label" for="customCheck">Lembre de mim</label>
        </div>
    </div>
    <button class="btn btn-primary btn-user btn-block" >
        Entrar
    </button>

    <hr>
    <a href="{{route('social.login', ['provider' => 'google'])}}" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Entrar com o Google
    </a>
    <a href="{{route('social.login', ['provider' => 'facebook'])}}" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Entrar com o Facebook
    </a>
    <a href="{{route('social.login', ['provider' => 'github'])}}" class="btn btn-dark btn-user btn-block">
        <i class="fab fa-github fa-fw"></i> Entrar com o GitHub
    </a>
</form>
@endsection

@section('links')
<div class="text-center">
    <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
</div>
<div class="text-center">
    <a class="small" href="{{url('/register')}}">Crie uma conta!</a>
</div>   
@endsection