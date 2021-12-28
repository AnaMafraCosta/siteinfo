@extends('layouts.dashboard')
@section('conteudo')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Usuários Cadastrados</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="{{ route("admin.show", [$user->id]) }}" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                            <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-trash btn-lg"></i></a>
                        </td>
                    </tr>
                @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection