@extends('layouts.dashboard')
@section('conteudo')
                    <!-- Page Heading -->
                        <div>   
                            <h1>STEVE JOBS</h1>
                            <h2>Suas invenções e a Apple</h2>
                            <div class="text-success text-right">
                                <i class="fas fa-cloud fa-lg"></i>
                            </div>
                        </div>
                        
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row justify-content-center">
                                    
                                    <div class="col-lg-9">
                                        <div class="p-5">
                                                
                                            
                                            
                                            <div class="Texto">
                                                <div>
                                                <h3 class="text-left">
                                                    Foi um empresário norte-americano co-fundador da Apple, uma das empresas de informática mais importantes do mundo. 
                                                    Junto com Steve Wozniak fundou a Apple na garagem de sua casa em Los Altos, Califórnia. Lá produziram o que foi batizado como Apple I, 
                                                    mas o sucesso comercial só veio após o lançamento do Apple II que consolidou a empresa como uma das mais respeitadas no ramo de tecnologia.
                                                </h3>
                                                </div>
                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-none d-lg-block"><img class="img-responsive bg-login-image d-flex ml-auto mt-4 w-100 h-75" ></div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="text-right mr-5">
                            <a href="" class="btn bg-danger text-dark btn-user col-sm-1 mr-auto" value="Excluir Perfil">Excluir</a>
                            <input type="submit" class="btn bg-success text-dark btn-user col-sm-1 ml-auto" value="Editar">
                            <input type="submit" class="btn bg-info text-dark btn-user col-sm-1 ml-auto" value="Remover">
                        </div>

@endsection