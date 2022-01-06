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
                            @if($user->deleted_at===null)
                            <abbr title="Ver perfil do usuário" style="text-decoration:none">
                                <a href="{{ route("admin.show", [$user->id]) }}" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                            </abbr>
                            <form action="{{route('user.destroy', [$user->id])}}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <abbr title="Excluir usuário" style="text-decoration:none">
                                    <button type="submit" class="btn btn-circle bg-danger text-white" ><i class="fa fa-trash btn-lg"></i></button>
                                </abbr>
                            </form>
                            @else
                            <form action="{{route('user.restore', [$user->id])}}" method="POST" style="display:inline-block">
                                @csrf
                                <abbr title="Reativar usuário" style="text-decoration:none">
                                    <button type="submit" class="btn btn-circle bg-success text-white" tittle="Reativar Usuario"><i class="fa fa-reply btn-lg"></i></button>
                                </abbr>
                            </form>
                            @endif
                        </td>
                    </tr>
                @endforeach                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection