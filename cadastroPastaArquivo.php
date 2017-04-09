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
                <h2 class="text-center">Cadastro da Pasta de Arquivos</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroPastaArquivo" id="pastaArquivoForm" novalidate>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeProdutor">Nome Cliente</label>
                                    <!-- Este campo vai pegar o nome do cliente logado-->
                                    <input type="text" name="nomeCliente" class="form-control" placeholder="Nome Cliente" id="nomeClientePastaArquivo" maxlength="100"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomePasta">Nome da Pasta</label>
                                    <input type="text" name="nomePasta" class="form-control" placeholder="Nome da Pasta" id="nomePastaArquivo" maxlength="80"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="url">Link da Pasta</label>
                                    <input type="text" name="url" class="form-control" placeholder="Link da Pasta" id="urlPastaArquivo" maxlength="200"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tamanho">Tamanho do Arquivo</label>
                                    <input type="number" name="tamanho" class="form-control" placeholder="Tamanho" id="tamanhoPastaArquivo">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="formato">Formato do Arquivo(ex: .mp4, .pdf)</label>
                                    <input type="text" name="formato" class="form-control" placeholder="Formato do Arquivo" id="formatoPastaArquivo">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="descricaoConteudo">Descrição Conteudo</label>
                                     <div id="success"></div>
                                    <div class="row">
                                        <div class="form-group col-xs-12">
                                            <button type="submit" class="btn btn-success btn-lg">Adicionar Conteúdo</button>
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


