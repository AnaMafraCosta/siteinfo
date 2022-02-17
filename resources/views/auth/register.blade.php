@extends('layouts.auth')

@section('titulo')
    Registro
@endsection
@section('subtitulo')
    Registro
@endsection
@section('mensagem')
    Cadastre-se!
@endsection
@section('imagem')
<img src="./img/bg-img/37.png" alt="">
@endsection

@section('form')
<form class="user uza-contact-form" action="{{url('/register')}}" method="POST">
    @csrf
<div class="row d-flex justify-content-center">
    <div class="col-12 ">
            <input type="text" class="form-control mb-30"" id="name" name="name"
                placeholder="Nome">
            @error('name')
                <span>{{$message}}</span>
            @enderror
    </div>
    <div class="col-12 ">
        <input type="email" class="form-control mb-30" id="email" name="email"
            placeholder="Email">
            @error('email')
                <span>{{$message}}</span>
            @enderror
    </div>
        <div class="col-lg-6 ">
            <input type="password" class="form-control mb-30"
                id="password" name="password" placeholder="Senha">
                @error('password')
                <span>{{$message}}</span>
                @enderror
        </div>
        <div class="col-lg-6 ">
            <input type="password" class="form-control mb-30"
                id="password_confirmation" name="password_confirmation" placeholder="Repita a senha">
                @error('password_confirmation')
                <span>{{$message}}</span>
                @enderror
            </div>
    <div class="col-12 row d-flex justify-content-center">
        <button type="submit" class="btn uza-btn btn-block btn-3 mt-15 float-right ">Registrar</button>
    </div>
    <hr>
    <div class="col-12 text-center">
        <br>
    <a href="{{route('social.login', ['provider' => 'google'])}}" class="btn uza-btn btn-block btn-2">
        <i class="fa fa-google "></i> Entrar com o Google
    </a>
    </div>
    <div class="col-12  text-center">
    <br>
    <a href="{{route('social.login', ['provider' => 'facebook'])}}" class="facebook btn-block btn uza-btn btn-2">
        <i class="fa fa-facebook"></i> Entrar com o Facebook
    </a>
    </div>
    <div class="col-12  text-center">
    <br>
    <a href="{{route('social.login', ['provider' => 'github'])}}" class="btn btn-block uza-btn btn-2">
        <i class="fa fa-github"></i> Entrar com o GitHub
    </a>
    </div>
</div>
</form>
<div class="text-center">
    <br>
    <a href="{{route('login')}}">Já tem uma conta? Conecte-se!</a>
</div>
@endsection