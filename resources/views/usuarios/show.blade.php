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
                                                    <h1 class="display-3 mb-4 ml-auto mr-auto d-inline-block">{{$user->name}}</h1>
                                                    
                                                </div>
                                                
                                                <h4>{{$user->email}}</h4>
                                                <h4>{{$user->nascimento}}</h4>
                                                <h4>{{$user->formacao}}</h4>
                                                <hr> 

                                                <div class="form-group row">
                                                    <a href="{{route('user.edit', [$user = Auth::user()])}}" class="btn bg-warning text-dark btn-user col-sm-2 ml-auto mb-auto">Editar Perfil</a>
                                                    
                                                </div>
                                               

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
                                    <div class="col-lg-9">
                                        <div class="p-5 form-group row">
                                            <h3>Deseja fazer postagens e contribuir com o conteúdo da página? Torne-se um usuário interno!</h3>
                                            <a href="" class="btn btn-md bg-success text-dark col-sm-2 ml-auto">Enviar Solicitção</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection