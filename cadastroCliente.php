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
                <h3 class="text-center">Cadastro de Cliente</h3>
                <hr>

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroCliente" id="clienteForm" action="cadastroCliente.php" method="post">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nmCliente" maxlength="100" required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
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
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="senhaCliente"  minlength="8" maxlength="16" required data-validation-required-message="Por Favor insira sua senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <!--div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaClienteC" required data-validation-required-message="Por Favor insira sua Senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div-->
                            <div class="row control-group">
                                <div class="form-group col-xs-12 ">
                                    <input type="text" name="" class="form-control" placeholder="Tipo de cliente" id="" readonly="true" required data-validation-required-message="">
                                    <select name="tipoCliente" class="form-control" placeholder="tipoCliente" id="tipoCiente">
                                        <option value="1" onclick="tipoCliente(this.value);">Pessoa Juridica</option>
                                        <option value="2" onclick="tipoCliente(this.value);">Pessoa Física</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" maxlength="11" class="form-control" placeholder="Celular" id="celularCliente" required data-validation-required-message="">
                                </div>
                            </div>
                            <div id="divCpf" class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CPF</label>
                                    <input type="number" name="cpf" maxlength="11" class="form-control" placeholder="CPF" id="cpfCliente" required data-validation-required-message="">
                                </div>
                            </div>
                            
                            <div id="divCnpj" style='display: none;' class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CNPJ</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="CNPJ" id="cnpjCliente" required data-validation-required-message="">
                                </div>
                            </div>
                            
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="lagradouro">Lagradouro(rua, avenida, praça viela)</label>
                                    <input type="text" name="lagradouro" class="form-control" placeholder="Lagradouro" id="lagradouroCliente" maxlength="100" >
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
                                    <input type="number" name="cep" class="form-control" placeholder="Cep" id="cepCliente" >
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade" id="cidadeCliente" maxlength="50" >
                                </div>
                            </div>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" class="form-control" placeholder="Estado" id="estadoCliente" maxlength="2" >
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                                    <button type="reset" class="btn btn-success btn-lg" onclick="location.href='index.php'">Cancelar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
      <?php include_once "rodape.php" ?>
    </body>
    <?php
         //Validando os Dados
         

            if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cpf']))     {
                    //Cadastro ou Alteração dos Dados
                    include_once "conexao.php";
                    $nmCliente = $_POST["nome"];
                    $emailCliente = $_POST["email"];
                    $senhaCliente = $_POST["senha"];
                    $celularCliente = $_POST["celular"];
                    $cnpj_cpfCliente= $_POST["cpf"];
                    $lagradouroCliente = $_POST["lagradouro"];
                    $numeroCliente = $_POST["numero"];
                    $complementoCliente = $_POST["complemento"];
                    $bairroCliente = $_POST["bairro"];
                    $cidadeCliente = $_POST["cidade"];
                    $estadoCliente = $_POST["estado"];

                    $sql = "INSERT INTO cliente (nmCliente, emailCliente, senhaCliente, celularCliente, cnpj_cpfCliente, logradouroCliente, numeroCliente, complementoCliente, bairroCliente, cidadeCliente, estadoCliente) VALUES ('$nmCliente', '$emailCliente', '$senhaCliente', '$celularCliente', '$cpf_cnpjCliente', '$lagradouroCliente', '$numeroCliente', '$complementoCliente', '$bairroCliente', '$cidadeCliente', '$estadoCliente')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Cadastro efetuado com sucesso!')
                                    window.open('index.php','_self')</script>";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }
    ?>
</html>


