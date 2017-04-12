<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>

</head>

    <body id="page-top" class="index">

       <?php include_once "navegacao.php" ?>

    <?php
         //Validando os Dados
         if(isset($_POST["nnCliente"]) && isset($_POST["emailCliente"]) && isset($_POST["senhaCliente"]) && isset($_POST["celularCliente"]) && isset($_POST["sexoCliente"]) && isset($_POST["cpf_cnpjCliente"]) && isset($_POST["lagradouroCliente"]) && isset($_POST["numeroCliente"]) && isset($_POST["complementoCliente"]) && isset($_POST["bairroCliente"]) && isset($_POST["cidadeCliente"]) && isset($_POST["estadoCliente"]))
            {
                if(empty($_POST["nmAdm"]))
                    $erro = "Campo Obrigátorio";
                else
                if(empty($_POST["emailAdm"]))
                    $erro = "Campo Obrigátorio";
                else
                if(empty($_POST["senhaAdm"]))
                    $erro = "Campo Obrigátorio";
                
                else
                {
                    //Cadastro ou Alteração dos Dados
                     $obj_mysqli = new mysqli("127.0.0.1","root","","adapt");
                     if ($obj_mysqli->connect_errno){
                            echo "Ocorreu um erro com a conexão com o banco de dados.";
                         }
                     mysqli_set_charset($obj_mysqli, 'utf8');

                    $nmCliente = $_POST["nmCliente"];
                    $emailCliente = $_POST["emailCliente"];
                    $senhaCliente = $_POST["senhaCliente"];
                    $celularCliente = $_POST["celularCliente"];
                    $sexoCliente = $_POST["sexoCliente"];
                    $cpf_cnpjCliente= $_POST["cpf_cnpjCliente"];
                    $lagradouroCliente = $_POST["lagradouroCliente"];
                    $numeroCliente = $_POST["numeroCliente"];
                    $complementoCliente = $_POST["complementoCliente"];
                    $bairroCliente = $_POST["bairroCliente"];
                    $cidadeCliente = $_POST["cidadeCliente"];
                    $estadoCliente = $_POST["estadoCliente"];
                    

                    $stmt = $obj_mysqli->prepare("INSERT INTO cliente('nmCliente','emailCliente','senhaCliente','celularCliente',sexoCliente','cpf_cnpjCliente','lagradouroCliente', 'numeroCliente', 'complementoCliente,'bairroCliente', 'cidadeCliente', 'cidadeCliente')VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt->blind_param('ssssssssssss', $nmCliente, $emailCliente, $senhaCliente, $celularCliente,  $sexoCliente, $cpf_cnpjCliente, $lagradouroCliente, $numeroCliente, $complementoCliente, $bairroCliente, $cidadeCliente, $estadoCliente);

                    if(!$stmt->execute())
                        {
                            echo  $stmt->error;
                        }
                    else
                        {
                            echo "Dados cadastrados com sucesso!";
                        }

                }

            }
         ?>


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
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nmCliente" maxlength="100"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 ">
                                    <h3>Tipo Cliente</h3>
                                    <select name="tipoCliente" class="form-control" placeholder="tipoCliente" id=tipoCiente">
                                        <option value="pFisica">Pessoa Física</option>
                                        <option value="pJuridica">Pessoa Juridica</option>
                                    </select>
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
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="senhaCliente" required data-validation-required-message="Por Favor insira sua senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaClienteC" required data-validation-required-message="Por Favor insira sua Senha">
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
                                    <input type="text" name="lagradouro" class="form-control" placeholder="Lagradouro" id="lagradouroCliente" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="numero">Numero</label>
                                    <input type="number" name="numero" class="form-control" placeholder="Numero" id="numeroCliente" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" class="form-control" placeholder="Complemento" id="complementoCliente" maxlength="20">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" class="form-control" placeholder="Bairro" id="bairroCliente" maxlength="50">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cep">Cep</label>
                                    <input type="number" name="cep" class="form-control" placeholder="Cep" id="cepCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" id="cidadeCliente" maxlength="50">
                                </div>
                            </div>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="Estado" id="estadoCliente" maxlength="2">
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


