@extends('layouts.dashboard')
@section('conteudo')
                    <!-- Page Heading -->
                    <div class="form-group row">
                        <h1 class="h3 mb-4 text-gray-800">Painel de Controle</h1>
                        <a href="" class="btn bg-warning text-dark col-sm-2 ml-auto mb-auto">Adicionar Usuário</a>
                    </div>


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
                                        <tr>
                                            <td>1</td>
                                            <td>Ronald de Souza</td>
                                            <td>telles.s@escolar.ifrn.edu.br</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-trash btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Ana Luíza</td>
                                            <td>costa.mafra@escolar.ifrn.edu.br</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-trash btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>João Lucas</td>
                                            <td>dantas.o@escolar.ifrn.edu.br</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-trash btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Maria Eloisa</td>
                                            <td>eloisa.s@escolar.ifrn.edu.br</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-danger text-white"><i class="fas fa-trash btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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