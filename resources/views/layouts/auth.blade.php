@extends('layouts.site')

@section('conteudo')
    <!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">@yield('titulo')</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('subtitulo')</li>
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
                    @yield('imagem')
                    </div>
                </div>

                <!-- About Us Content -->
                <div class="col-12 col-lg-6">
                    <div class="section-heading mb-5">
                        <h2>@yield('mensagem')</h2>
                    </div>
                    <div class="about-us-content mb-80">
                        <!-- Mona Tab Content -->
                        <div class="about-tab-content">
                            <div class="tab-content" id="mona_modelTabContent">
                                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Tab Content Text -->
                                    <div class="tab-content-text">
                                    @yield('form')
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
    <div class="border-line"></div>
@endsection