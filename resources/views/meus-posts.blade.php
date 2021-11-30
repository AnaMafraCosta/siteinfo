@extends('layouts.dashboard')
@section('conteudo')
                    <!-- Page Heading -->
                    <div class="form-group row">
                        <a href="" class="btn bg-warning text-dark col-sm-2 ml-auto mb-auto">Novo Post</a>
                    </div>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Meus Posts</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Título</th>
                                            <th>Subtítulo</th>
                                            <th>Data</th>
                                            <th>Ações</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Agro 4.0</td>
                                            <td>Smart Farm</td>
                                            <td>02/10/2020</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-success text-white"><i class="fas fa-pen btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Mark Zuckerberg</td>
                                            <td>E a maior rede social do mundo</td>
                                            <td>07/11/2021</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-success text-white"><i class="fas fa-pen btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>James Gosling</td>
                                            <td>O pai do Java</td>
                                            <td>20/10/2021</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-success text-white"><i class="fas fa-pen btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Tim Berners-Lee</td>
                                            <td>O pai da world wide web</td>
                                            <td>14/11/2021</td>
                                            <td>
                                                <a href="" class="btn-circle bg-info text-white"><i class="fas fa-info btn-lg"></i></a>
                                                <a href="" class="btn-circle bg-success text-white"><i class="fas fa-pen btn-lg"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection