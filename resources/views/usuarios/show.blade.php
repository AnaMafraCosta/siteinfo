@extends('layouts.dashboard')
@section('conteudo')
                    <!-- Page Heading -->

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-2 d-none d-lg-block"><img class="img-responsive img-profile rounded-circle d-flex ml-4 mt-4 w-100 h-75" src="img/undraw_profile.svg"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="user">
                                                <div class="form-group row">
                                                    <h1 class="h1 mb-4 d-inline-block">{{$user->name}}</h1>
                                                    <a href="{{route('user.edit', [$user = Auth::user()])}}" class="btn bg-warning text-dark btn-user col-sm-3 ml-auto mr-auto mb-auto">Editar Perfil</a>
                                                </div>
                                                
                                                <h2>{{$user->email}}</h2>
                                                <h2>{{$user->nascimento}}</h2>
                                                <h2>{{$user->formacao}}</h2>
                                                <hr> 
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="p-5 form-group row">
                                            <h3>Deseja fazer postagens e contribuir com o conteúdo da página? Torne-se um usuário interno!</h3>
                                            <a href="" class="btn bg-success text-dark col-sm-4 mr-5 ml-auto">Enviar Solicitção</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection