@extends('layouts.site')

@section('conteudo')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Sobre</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sobre</li>
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
                        <img src="./img/bg-img/32.png" alt="">
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>O PROJETO</h2>
                    </div>

                    <div class="about-us-content mb-80">
                        <div class="about-tab-area">
                            <ul class="nav nav-tabs mb-50" id="mona_modelTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">APRESENTAÇÃO</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                        <p class="text-justify">Com o objetivo de ampliar as possibilidades de comunicação entre o curso e a sociedade seridoense através das mídias sociais, foi desenvolvido um projeto que teve início com a criação de perfis nas redes sociais mais utilizadas e também a implementação de ações nessas redes com foco em toda a comunidade associada ao IFRN: alunos e cidadãos da região Seridó.</p>
                                        <p class="text-justify">Estabelecemos uma plataforma de comunicação envolvendo este site, como portal oficial, uma página e um perfil no Facebook, um perfil no Instagram integrado ao Facebook e um canal no Youtube.</p>
                                        <p class="text-justify">Cada uma dessas ações tem um propósito específico e possibilitará a realização de diferentes formatos de conteúdo. Por fim, esse projeto ajudará na comunicação oficial do campus juntando forças às ações já existentes no campus.</p>
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
                        <h2>Equipe Desenvolvedora</h2>
                        <p>Conheça os programadores por trás do desenvolvimentos do site.</p>
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
                        <img src="./img/bg-img/33.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Orientador</h6>
                            <h4>Romerito Campos</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/34.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Aluna</h6>
                            <h4>Ana Mafra</h4>
                        </div>
                    </div>

                    <!-- Single Team Slide -->
                    <div class="single-team-slide">
                        <img src="./img/bg-img/35.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h6>Aluna</h6>
                            <h4>Eloisa Silva</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->
@endsection