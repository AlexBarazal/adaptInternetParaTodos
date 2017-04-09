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
                <h2 class="text-center">Cadastro de Cliente</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroCliente" id="clienteForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nomeProdutor" maxlength="100"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" class="form-control" placeholder="Celular" id="celularCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" id="emailCliente" required data-validation-required-message="Por Favor insira seu email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 ">
                                    <h3>Sexo</h3>
                                    <select name="sexo" class="form-control" placeholder="Sexo" id="sexoCliente">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CPF</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="CPF" id="cpfCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cnpj">CNPJ</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="CNPJ" id="cnpjCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="lagradouro">Lagradouro(rua, avenida, praça viela)</label>
                                    <input type="text" name="lagradouro" class="form-control" placeholder="Lagradouro" id="lagradouroProdutor" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="numero">Numero</label>
                                    <input type="number" name="numero" class="form-control" placeholder="Nome" id="numeroProdutor" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" class="form-control" placeholder="Complemento" id="complementoProdutor" maxlength="20">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" id="bairroProdutor" maxlength="50">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cep">Cep</label>
                                    <input type="number" name="cep" class="form-control" placeholder="Cep" id="cepProdutor">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" id="cidadeProdutor" maxlength="50">
                                </div>
                            </div>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="Estado" id="estadoProdutor" maxlength="2">
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


