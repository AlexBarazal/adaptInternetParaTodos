<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>

</head>

    <body id="page-top" class="index">

       <?php include_once "navegacao.php" ?>


     <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <br>
                <h2 class="text-center">Cadastro do Conteúdo</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroDescricaoConteudo" id="descricaoConteudoForm" novalidate>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomePasta">Nome da Pasta</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="nomePasta" class="form-control" placeholder="Nome da Pasta" id="nomePastaArquivo" maxlength="80">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeConteudo">Nome Conteúdo</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="nomeConteudo" class="form-control" placeholder="Nome Conteúdo" id="nomeConteudo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="conteudoProgramatico">Conteúdo Programático</label>
                                    <input type="text" name="conteudoProgramatico" class="form-control" placeholder="Conteúdo Programático" id="conteudoProgramatico" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="objetivo">Objetivo</label>
                                    <input type="text" name="objetivo" class="form-control" placeholder="Objetivo Programático" id="objetivo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="quantidadeArquivos">quantidadeArquivos</label>
                                    <input type="text" name="quantidadeArquivos" class="form-control" placeholder="Quantidade de Arquivos" id="quantidadeArquivos" maxlength="100">
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Consultar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Alterar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Excluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once "rodape.php" ?>
    </body>
</html>


