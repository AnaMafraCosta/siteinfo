@extends('layouts.dashboard')
@section('aba')
<title>Editar Perfil</title>
@endsection
@section('conteudo')
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"></h1>

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row justify-content-center">
                                    <div class="row-4 d-lg-block align-items-center" style="border-radius: 50%;">
                                        <img class="img-responsive img-profile rounded-circle d-flex w-100 h-60 mt-5" src="/img/profiles/{{$user->image}}">
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4 d-inline-block">Usuário</h1>
                                            </div>
                                            
                                            <form action="{{route('user.update', [$user = Auth::user()])}}" class="user" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                                            placeholder="E-mail" name="email" value="{{old('email', $user->email)}}">
                                                            @error('email')
                                                            <span>{{$errors->first('email')}}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="date" class="form-control form-control-user" id="exampleInputDate"
                                                        placeholder="Data de Nascimento" name="nascimento" value="{{$user->nascimento}}">
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <input type="text" class="form-control form-control-user"
                                                            id="exampleInputFormação" placeholder="Formação" name="formacao" value="{{$user->formacao}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-sm mb-3 mb-sm-0">
                                                        <label for="image">Foto de Perfil:</label>
                                                        <input type="file" class="form-control-file" id="imagem" placeholder="Imagem de Perfil" name="image">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="form-group row">
                                                    <a href="{{route('user.show', [$user = Auth::user()])}}" class="btn bg-warning text-light btn-user col-sm-5 mr-auto" value="Cancelar Edição">Cancelar Edição</a>
                                                    <input type="submit" class="btn bg-primary text-light btn-user col-sm-5 ml-auto" value="Salvar Perfil">
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

@endsection
                
