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
                        <form name="cadastroConteudo" id="conteudoForm" novalidate>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeProdutor">Nome Cliente</label>
                                    <!-- Este campo vai pegar o nome do cliente logado-->
                                    <input type="text" name="nomeCliente" class="form-control" placeholder="Nome Cliente" id="nomeClientePastaArquivo" maxlength="100">
                                </div>
                            </div>
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
                                    <input type="text" name="nomeConteudo" class="form-control" placeholder="Nome Conteúdo" id="nomeConteudo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tipoConteudo">Tipo Conteúdo</label>
                                    <input type="text" name="tipoConteudo" class="form-control" placeholder="Tipo Conteúdo" id="tipoConteudo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="descricaoConteudo">Descrição Conteúdo</label>
                                     <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-success btn-lg">Adicionar Descrição Conteúdo</button>
                                        </div>
                                    </div>
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


