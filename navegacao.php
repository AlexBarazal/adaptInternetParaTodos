 <!-- Navigation -->
        <nav id="mainNav" class="navbar fixed-top navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <div class="container">
                <a class="navbar-brand page-scroll" href="index.php#page-top"><i class="fa fa-asl-interpreting fa-flip-horizontal"></i>&nbsp<i class="fa fa-blind fa-flip-horizontal"></i>&nbsp<i class="fa fa-deaf fa-flip-horizontal"></i>&nbsp &nbspAdapt</a>
                <div class="collapse navbar-collapse" id="navbarExample">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">CADASTRAR <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="cadastroAdm.php">Administrador</a></li>
                              <li><a href="cadastroCliente.php">Cliente</a></li>
                              <li><a href="cadastroVisitante.php">Visitante</a></li>              
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">AREA DO CLIENTE <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="cadastroPastaArquivo.php">Adicionar Pasta</a></li>
                              <li><a href="cadastroConteudo.php">Adicionar Conteúdo</a></li>
                              <li><a href="cadastroDescricaoConteudo.php">Adicionar Descrição Conteúdo</a></li>
                              <li><a href="alterarAdm.php">Alterar/Excluir Administrador</a></li>
                              <li><a href="alterarCliente.php">Alterar/Excluir Cliente</a></li>
                              <li><a href="consultaAdm.php">Consultar</a></li>
                              <li><a href="conteudoCliente.php">Meus Arquivos</a></li>
                            </ul>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php#portfolio">Portfólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="noticias.php">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php#about">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php#contact">Contato</a>
                        </li>
                            <?php
                                    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
                                        {
                                        unset($_SESSION['email']);
                                        unset($_SESSION['senha']);
                                        
                                        

                                    echo "<li class='nav-item'><a href='login.php' class='nav-link page-scroll'>Entrar</a></li>";
                                    }else{
                                    echo "<li class='nav-item'><a href='' class='nav-link page-scroll'>".$_SESSION['nome']."</a></li><li><a href='logout.php' >Sair</a></li>";
                           } ?>
                    </ul>
                </div>
            </div>
        </nav>
