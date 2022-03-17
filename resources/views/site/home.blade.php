@extends('layouts.site')

@section('conteudo')
    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome-area">

            <!-- Single Welcome Slide -->
            <div class="single-welcome-slide">
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12 col-lg-6">
                                <div class="welcome-text">
                                    <h2 data-animation="fadeInUp" data-delay="100ms">Curso de<br><span>Informática</span></h2>
                                    <h5 data-animation="fadeInUp" data-delay="400ms">IFRN - Campus Caicó</h5>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="col-12 col-lg-6">
                                <div class="welcome-thumbnail">
                                    <img src="./img/bg-img/1.png" alt="" data-animation="slideInRight" data-delay="400ms">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ***** Services Area Start ***** -->
    <section class="uza-services-area section-padding-40-0">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>O que você encontra <br>no nosso site</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_easel"></i>
                        </div>
                        <h5>Eventos</h5>
                        <p>Fique por dentro de todas as palestras e minicursos de Informática realizados pelo Campus.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_lightbulb_alt">
                            </i>
                        </div>
                        <h5>Projetos</h5>
                        <p>Conheça os projetos desenvolvidos por nossos alunos e docentes.</p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-4">
                    <div class="single-service-area mb-80">
                        <!-- Service Icon -->
                        <div class="service-icon">
                            <i class="icon_documents_alt"></i>
                        </div>
                        <h5>Notícias</h5>
                        <p>Não perca as novas oportunidades para estágio e projetos vinculados ao Curso.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Services Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <section class="uza-portfolio-area section-padding-80">
        <div class="container">
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h2>Nossas redes sociais</h2>
                        <p>Estamos no Instagram, Youtube e Facebook. Por lá você encontra conteúdos sobre:</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- Portfolio Slides -->
                <div class="portfolio-sildes owl-carousel">

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/3.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Jargões do Programador</h4>
                            <p>Explicações rápidas e fáceis de aprender sobre os termos mais recorrentes da nossa</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CQ9G0FaheW4/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/4.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Curiosidades da Informática</h4>
                            <p>Postagens sobre curiosidades por trás da história da Informática.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CZxDVZfuUus/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/5.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Biografias de Profissionais</h4>
                            <p>Conheça um pouco sobre aqueles que deixaram seu legado na área da tecnologia.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CYE_TINFD0L/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/6.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Participação Feminina na TI</h4>
                            <p>Debates sobre a importância da participação feminina na TI, assim como divulgação de projetos e eventos realizados por mulheres na tecnologia da informação.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CYHena3r6zW/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/25.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Indicações de Filmes</h4>
                            <p>Trouxemos as melhores recomendações para você poder curtir um cinema sem sair de casa, e de bônus, ainda conhecer mais sobre a nossa área!</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CPJPCL-hnC9/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/26.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Ciclo de Palestras Tecnologia da Informação</h4>
                            <p>Todas as lives de palestras, cada uma com um convidado especial, estão disponíveis no canal de youtube do curso.</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://youtu.be/iB6p49Sd5eA"><i class="arrow_right"></i></a>
                        </div>
                    </div>
                    <!-- Single Portfolio Slide -->
                    <div class="single-portfolio-slide">
                        <img src="./img/bg-img/27.png" alt="">
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4>Indicações de Livros</h4>
                            <p>Fora os materiais didáticos recorrentes entre os alunos, que tal fazer uma boa leitura que misture ficção com tecnologia?!</p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="https://www.instagram.com/p/CRHZ8gWsDkC/?utm_medium=copy_link"><i class="arrow_right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br>
        <!-- Client Feedback Area Start -->
        <div class="clients-feedback-area mt-80 section-padding-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Testimonial Slides -->
                        <div class="testimonial-slides owl-carousel">

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="./img/bg-img/7.png" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“A única maneira de aprender uma nova linguagem de programação é escrevendo nela.”</h4>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Dennis Ritchie</h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('./img/bg-img/23.png')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Tente pensar em novas maneiras de resolver os problemas antigos. Muitas vezes olhamos para algo e dizemos: ‘Eu poderia fazer melhor’. Isso é inovação”</h4>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Steve Wozniak</h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('./img/bg-img/24.png')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Construa alguma coisa. Qualquer coisa. A melhor forma de se aprender é fazendo. E se você pegar algo divertido para desenvolver, o aprendizado será mais fácil.”</h4>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>James Gosling</h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>
                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('./img/bg-img/28.png')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“O objetivo da Web é servir a humanidade. Nós a construímos agora para que aqueles que venham mais tarde possam criar coisas que não podemos imaginar.”</h4>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Tim Berners-Lee</h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>
                            <!-- Single Testimonial Slide -->
                            <div class="single-testimonial-slide d-flex align-items-center">
                                <!-- Testimonial Thumbnail -->
                                <div class="testimonial-thumbnail">
                                    <img src="{{asset('./img/bg-img/29.png')}}" alt="">
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-content">
                                    <h4>“Programação é tão fascinante. Você cria seu próprio universo e ele faz o que você mandar.”</h4>
                                    <!-- Author Info -->
                                    <div class="author-info">
                                        <h5>Vint Cerf</h5>
                                    </div>
                                    <!-- Quote Icon -->
                                    <div class="quote-icon"><img src="img/core-img/quote.png" alt=""></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client Feedback Area End -->

        <!-- Border -->
        <br>
        <div class="container">
            <div class="border-line"></div>
        </div>

        <!-- Background Curve -->
        <div class="portfolio-bg-curve">
            <img src="./img/core-img/curve-3.png" alt="">
        </div>
    </section>
    <!-- ***** Portfolio Area End ***** -->

    <!-- ***** Blog Area Start ***** -->
    <!-- ***** Blog Area End ***** -->

    
    <!-- ***** Newsletter Area End ***** -->
@endsection