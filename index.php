<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php include_once "cabecalho.php" ?>
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php include_once "navegacao.php" ?>

    <!-- Header -->
    <header>
        <div class="container">
            <img class="img-fluid" src="img/portfolio/profile.png" alt="">
            <div class="intro-text">
                <span class="name">Adapt</span>
                <hr>
                <span class="name">Internet para Todos!</span>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <h2 class="text-center">Portfólio</h2>
            <hr>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/escutaOlhos.png" class="img-fluid" alt="">
                        <!--https://www.youtube.com/watch?v=DswRVj5Qa9E-->
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/facaDiferenca.png" class="img-fluid" alt="">
                        <!--https://www.youtube.com/watch?v=J3YFleEq2DY-->
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/programaEspecial.png" class="img-fluid" alt="">
                        <!--https://www.youtube.com/watch?v=9IeYntTfM4s-->
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/acessoTodos.png" class="img-fluid" alt="">
                        <!--http://www.acessoparatodos.com.br/-->
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/comAcesso.png" class="img-fluid" alt="">
                        <!--http://www.comacesso.pt/-->
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/governoEletronico.png" class="img-fluid" alt="">
                        <!--https://www.governoeletronico.gov.br/-->
                    </a>
                </div>
            </div>
            <hr>
        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <h2 class="text-center">Sobre</h2>
            <hr>
            <div class="row">
                <div class="col-lg-4 offset-lg-2">
                    <p>A Adapt: Internet para Todos é uma plataforma de adaptação para cursos online, que pode transformar os conteúdos em vídeos, documentos, sites, apresentações entre outros, e entregar o material acessível para o cliente como também disponibilizando o material no site. Os materiais poderão ser adaptados para pessoas com deficiência visual e deficiente auditiva. <br>
                    </p>
                </div>
                <div class="col-lg-4">
                    <p>A plataforma funcionará da seguinte forma: o cliente disponibiliza o conteúdo no site, será feita  todas as adaptações e o conteúdo será disponibilizado para o cliente realizar o download. <br>
                    Esses conteúdo adaptados serão divulgados no site para pessoas que acessam a plataforma possam saber onde encontrar os conteúdos.</p>
                </div>
                <hr>
                <div class="col-lg-8 offset-lg-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-envelope"></i> Entre  em contato!
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="text-center">Contato</h2>
            <hr>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" id="name" required data-validation-required-message="Digite seu nome.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email </label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Digite seu email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefone</label>
                                <input type="tel" class="form-control" placeholder="Telefone" id="phone" required data-validation-required-message="Digite seu telefone.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Mensagem" id="message" required data-validation-required-message="Deixe sua mensagem."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
   <?php include_once "rodape.php" ?>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top hidden-lg-up">
        <a class="btn btn-primary page-scroll" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Quando se escuta com os olhos</h2>
                                <hr>
                                <img src="img/portfolio/escutaOlhos.png" class="img-fluid img-centered" alt="">
                                <p>Documentário produzido pela Divisão de Audiologia do Instituto Nacional de Educação de Surdos - INES sobre a Surdez e seu Diagnóstico. <a href="https://www.youtube.com/watch?v=DswRVj5Qa9E">Assista o video</a>.</p>
                                <ul class="list-inline item-details">
                                    <li>Cliente:
                                        <strong><a href="https://www.youtube.com/channel/UCGFEHwRxOdGBs7ik3B_yQ9Q">Ana Rocha</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adição de interprete de libras</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Faça a Diferença</h2>
                                <hr>
                                <img src="img/portfolio/facaDiferenca.png" class="img-fluid img-centered" alt="">
                                <p>Saiba quais os desafios da inclusão dos surdos no mercado de trabalho? Acompanha a rotina de colegas que trabalham na Assembleia Legislativa e são surdos. Saiba como é o teste da orelinha, Fácil, rápido e sem dor. O exame é obrigatório e gratuito. Todos os bebes recém-nascidos antes de receberem a alta hospitalar devem fazer o teste. <a href="https://www.youtube.com/watch?v=J3YFleEq2DY">Assista o video</a>.</p>
                                <ul class="list-inline item-details">
                                    <li>Cliente:
                                        <strong><a href="https://www.youtube.com/channel/UC-QxxNTmooBtLNm-FcQ65QQ">Faça a Diferença</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adição de interprete de libras</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Programa Especial</h2>https://www.youtube.com/watch?v=9IeYntTfM4s
                                <hr>
                                <img src="img/portfolio/programaEspecial.png" class="img-fluid img-centered" alt="">
                                <p>O Programa Especial desta semana é dedicado ao Dia do Surdo, que é comemorado em 26 de setembro. Reportagens especiais vão mostrar exemplos de pessoas que não medem esforços para levar uma vida normal e que têm na família o apoio necessário para viver bem. <br>
                                Esse é o caso da família da tradutora do programa, Jeanie Liza, formada completamente de surdos. Ela conta como se adaptou ao mundo dos ouvintes e como foi ser criada  nesse universo de pessoas com deficiência auditiva <a href="https://www.youtube.com/watch?v=9IeYntTfM4s">Assista o video</a>.</p>
                                <ul class="list-inline item-details">
                                     <li>Cliente:
                                        <strong><a href="https://www.youtube.com/channel/UCSv9d0kQegylHWpP83jWSQg">TV Brasil</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adição de interprete de libras</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Acesso para Todos</h2>
                                <hr>
                                <img src="img/portfolio/acessoTodos.png" class="img-fluid img-centered" alt="">
                                <p> Acesse o site <a href="http://www.acessoparatodos.com.br/"> Acesso para Todos</a>. </p>
                                <ul class="list-inline item-details">
                                    <li>Cliente:
                                        <strong><a href="https://www.acessoparatodos.com.br"> Acesso para Todos</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adaptação Web Site</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Com acesso</h2>
                                <hr>
                                <img src="img/portfolio/comAcesso.png" class="img-fluid img-centered" alt="">
                                <p> Acesse o website <a href="http://www.comacesso.pt/">comAcesso</a>. </p>
                                <ul class="list-inline item-details">
                                    <li>Cliente:
                                        <strong><a href="http://www.comacesso.pt/">Com Acesso</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adaptação Web Site</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <h2>Governo Eletrônico</h2>
                                <hr>
                                <img src="img/portfolio/governoEletronico.png" class="img-fluid img-centered" alt="">
                                <p>Este portal está sendo adaptado para o conteúdo da Estratégia do Governança Digital, contribuindo para a promoção do acesso às informações, a melhoria dos serviços públicos digitais e a ampliação da participação social. Acesse o site<a href="https://www.governoeletronico.gov.br/"> Governo Eletrônico</a>.</p>
                                <ul class="list-inline item-details">
                                    <li>Cliente:
                                        <strong><a href="https://www.governoeletronico.gov.br/">Governo Federal</a></strong>
                                    </li>
                                    <li>Date:
                                        <strong>Março 2017</strong>
                                    </li>
                                    <li>Serviço:
                                        <strong>Adaptação Web Site</strong>
                                    </li>
                                </ul>
                                <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i> Fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>

</html>
