@extends('layouts.site')

@section('conteudo')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Curso</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Curso</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="./img/core-img/curve-5.png" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class="uza-about-us-area section-padding-80">
        <div class="container">
            <div class="row align-items-center">
                <!-- About Thumbnail -->
                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-80">
                        <img src="./img/bg-img/2.png" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>O CURSO</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">APRESENTAÇÃO</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"> OBJETIVOS</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p class="text-justify">O Curso Técnico Integrado em Informática forma profissionais que desenvolvem programas de computador, seguindo as especificações e paradigmas da lógica de programação e das linguagens de programação; utilizam ambientes de desenvolvimentos de sistemas, sistemas operacionais e banco de dados; realizam testes de software, mantendo registro que possibilitem análises e refinamento dos resultados; executam manutenção de programas de computadores implantados. Possibilidades de atuação: Instituições públicas, privadas e do terceiro setor que demandem sistemas computacionais, especialmente envolvendo programação de computadores.</p>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p class="text-justify">O Curso Técnico Integrado em Informática, presencial, tem como objetivo geral: formar profissionais-cidadãos técnicos de nível médio, competentes técnica, ética e politicamente, com elevado grau de responsabilidade social e que contemple um novo perfil para saber, saber fazer e gerenciar atividades de concepção, especificação, projetos simples, implementação, avaliação, suporte e manutenção de sistemas, incluindo hardware, software, aspectos organizacionais e humanos, visando a aplicações na produção de bens, serviços e conhecimentos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Background Pattern -->
        <div class="about-bg-pattern">
            <img src="./img/core-img/curve-2.png" alt="">
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Team Member Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Equipe Docente</h2>
                        <p>Conheça todos os profissionais que atuam nas disciplinas técnicas.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Team Member Slides -->
                <div class="team-sildes owl-carousel">

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/18.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professor e Coordenador do Curso</h6>
                            <h4>Romerito Campos</h4>
                        </div>
                        <!-- Social Info -->
                        <div class="team-social-info">
                            <a href="#" class="instagram" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="youtube" data-toggle="tooltip" data-placement="top" title="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/19.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professora</h6>
                            <h4>Huliane Medeiros</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/20.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professor</h6>
                            <h4>Pedro Iure</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/21.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professor</h6>
                            <h4>Alessandro Rolim</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/30.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professor</h6>
                            <h4>Daniel Macedo</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/31.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Professor</h6>
                            <h4>Ari Barreto</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Border -->
        <div class="container">
            <div class="border-line mt-40"></div>
        </div>
    </section>
    <!-- ***** Team Member Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <div class="uza-cf-area section-padding-40-0">
        <div class="container">
            <div class="row">

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">400</span></h2>
                        <div class="cf-text">
                            <h6>Alunos<br>Formados</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_id-2"></i></div>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">280</span></h2>
                        <div class="cf-text">
                            <h6>Projetos<br>Realizados</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_box-checked"></i></div>
                    </div>
                </div>
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-cf-area d-flex align-items-center mb-80">
                        <h2><span class="counter">60</span></h2>
                        <div class="cf-text">
                            <h6>Projetos em <br>Andamento</h6>
                        </div>
                        <div class="bg-icon"><i class="icon_folder-add_alt"></i></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->
@endsection