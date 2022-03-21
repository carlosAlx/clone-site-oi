<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets//css/estilo.css">
        <link rel="stylesheet" href="/assets//css/reset.css">
        <link rel="stylesheet" href="/assets//css/home.css">
        <script src="https://kit.fontawesome.com/c190036b73.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php require('template.html'); ?>
        <section class="section-banner" id="banner">
            <div class="banner" id="banner">
                <div class="slide">
                    <img class="img-banner" src="/assets/img/phone-oferta-banner.png">
                </div>
                <div  class="slide">
                    <img class="img-banner" src="/assets/img/internet-Bg_SemMion360.png">
                </div>
                <div  class="slide ">
                    <img class="img-banner" src="/assets/img/controle-celular-controle-100gb_360.png">
                </div>                  
                <div class="nav-slide">
                    <i></i>
                    <a onclick="plusSlides(-1)"><i class="fa solid fa-angle-up"></i></a> 
                    <a class="dots" onclick="currentSlide(1)">Internet OI Fibra</a>
                    <a class="dots" onclick="currentSlide(2)">controle Pés-pago</a>
                    <a class="dots" onclick="currentSlide(3)">Oi Place</a>
                    <a  class="dots" onclick="currentSlide(4)">Joice</a>
                    <a  onclick="plusSlides(1)"><i class="fa solid fa-angle-down"></i></a>
                    <i></i>
                </div>
            </div>
            <div>
            </div>
        </section>

        <section class="section" id=services>
            <div class="container row border-green">
                <div class="col-25">
                   <div>
                       <h3>Internet Fibra,Planos Oi e mais serviços pra você</h3>
                   </div>
                </div>
                <div class=" col-75">
                    <div class="row h-green b-green">
                        <div class="col-50">
                            <h2>Internet OI fibra</h2>
                            <p>Contrate planos de internet residencial com até 1 Giga de velocidade e tenha a melhor experiência pra trabalhar ou estudar online,
                                jogar, assistir filmes e séries com a internet fibra ótica da Oi.</p>
                        </div>
                        <div class="col-50 b-green">
                            <img src="/assets/img/img-conta-online-lista.png">                       
                        </div>
                    </div>
                    <div class="row h-green b-green">
                        <div class="col-50">
                            <h2>Internet OI fibra</h2>
                            <p>Contrate planos de internet residencial com até 1 Giga de velocidade e tenha a melhor experiência pra trabalhar ou estudar online,
                                jogar, assistir filmes e séries com a internet fibra ótica da Oi.</p>
                        </div>
                        <div class="col-50">
                            <img src="/assets/img/img-conta-online-lista.png">   
                        </div>
                    </div>
                    <div class="row h-green b-green">
                        <div class="col-50">
                            <h2>Internet OI fibra</h2>
                            <p>Contrate planos de internet residencial com até 1 Giga de velocidade e tenha a melhor experiência pra trabalhar ou estudar online,
                                jogar, assistir filmes e séries com a internet fibra ótica da Oi.</p>
                        </div>
                        <div class="col-50">
                            <img src="/assets/img/img-conta-online-lista.png">
                        </div>
                    </div>   
                    <div class="row h-green">
                        <div class="col-50">
                            <h2>Internet OI fibra</h2>
                            <p>Contrate planos de internet residencial com até 1 Giga de velocidade e tenha a melhor experiência pra trabalhar ou estudar online,
                                jogar, assistir filmes e séries com a internet fibra ótica da Oi.</p>
                        </div>
                        <div class="col-50">
                           <img src="/assets/img/img-conta-online-lista.png">
                        </div>
                    </div>     
                </div> 
        </section>

        <section>
            <div class="container row">              
                    <div class="col-25">
                        <h1>Hoje tem as melhores ofertas pra você</h1>
                    </div>
                    <div class="col-25  h-green">
                        <h2>Oi Fibra</h2>
                        <p>Internet Fibra Ótica com alta velocidade e estabilidade pra você navegar à vontade, trabalhar ou estudar online,
                             jogar, assistir filmes e séries.</p>
                    </div>
                    <div class="col-25  h-green">
                        <h2>Oi Fibra</h2>
                        <p>Internet Fibra Ótica com alta velocidade e estabilidade pra você navegar à vontade, trabalhar ou estudar online,
                             jogar, assistir filmes e séries.</p>
                    </div>
                    <div class="col-25  h-green">
                        <h2>Oi Fibra</h2>
                        <p>Internet Fibra Ótica com alta velocidade e estabilidade pra você navegar à vontade, trabalhar ou estudar online,
                             jogar, assistir filmes e séries.</p>
                    </div>             
            </div>
        </section>

        <?php require('footer.html') ?>
    </body>
    <script src="/assets/js/script.js"></script>
</html>
