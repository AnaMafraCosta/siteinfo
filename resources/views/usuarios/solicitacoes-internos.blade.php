@extends('layouts.dashboard')
@section('conteudo')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h3 class="m-0 font-weight-bold text-primary">Solicitações para Usuário Interno</h3>
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
                    <tr>
                        <td>28</td>
                        <td>Romerito Campos</td>
                        <td>romerito.campos@escolar.ifrn.edu.br</td>
                        <td>
                            <a href="" class="btn-circle bg-success text-white"><i class="fas fa-plus btn-lg"></i></a>
                            <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-times btn-lg"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pedro Pedro</td>
                        <td>pedro@pedro.com</td>
                        <td>
                            <a href="" class="btn-circle bg-success text-white"><i class="fas fa-plus btn-lg"></i></a>
                            <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-times btn-lg"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection