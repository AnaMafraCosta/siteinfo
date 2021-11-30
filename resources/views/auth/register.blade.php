@extends('layouts.auth')

@section('titulo')
    Registro - Usuário
@endsection

@section('mensagem')
    Cadastre-se!
@endsection

@section('form')
<form class="user" action="{{url('/register')}}" method="POST">
    @csrf
    <div class="form-group">
            <input type="text" class="form-control form-control-user" id="name" name="name"
                placeholder="Nome">
            @error('name')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="email" name="email"
            placeholder="Email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user"
                id="password" name="password" placeholder="Senha">
                @error('password')
                <span>{{$message}}</span>
                @enderror
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user"
                id="password_confirmation" name="password_confirmation" placeholder="Repita a senha">
                @error('password_confirmation')
                <span>{{$message}}</span>
                @enderror
            </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Registrar Conta
    </button>
    <hr>
    <a href="index.html" class="btn btn-google btn-user btn-block">
        <i class="fab fa-google fa-fw"></i> Register com o Google
    </a>
    <a href="index.html" class="btn btn-facebook btn-user btn-block">
        <i class="fab fa-facebook-f fa-fw"></i> Register com o Facebook
    </a>
</form>
@endsection

@section('links')
<div class="text-center">
    <a class="small" href="forgot-password.html">Esqueceu a senha?</a>
</div>
<div class="text-center">
    <a class="small" href="login.html">Já tem uma conta? Entre!</a>
</div>
@endsection