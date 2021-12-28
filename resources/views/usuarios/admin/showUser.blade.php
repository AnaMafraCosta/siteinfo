@extends('layouts.dashboard')
@section('conteudo')
    <h1 class="h3 mb-4 text-gray-800"></h1>

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row justify-content-center">
                    <div class="col-lg-2 d-lg-block align-items-center">
                        <img class="img-responsive img-profile rounded-circle d-flex w-100 h-50 mt-5" src="/img/profiles/{{$user->image}}">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-4 d-inline-block">{{$user->name}}</h1>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <h6 class="control control-user"><strong>E-mail: </strong>{{$user->email}}</h6>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6 class="control control-user"><strong>Data de Nascimento: </strong>{{$user->nascimento}}</h6>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm mb-3 mb-sm-0">
                                    <h6 class="control control-user"><strong>Formação: </strong>{{$user->formacao}}</h6>
                                </div>
                            </div>                                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection