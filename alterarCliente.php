<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>
    
    <?php
   
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION)) session_start();
        
        $nivel_necessario = 2;
        
        // Verifica se não há a variável da sessão que identifica o usuário
        if (!isset($_SESSION['id']) OR ($_SESSION['userNivel'] <$nivel_necessario)) {
            // Destrói a sessão por segurança
            session_destroy();
            // Redireciona o visitante de volta pro login
            header("Location: index.php"); exit;
        }
    
    ?>

</head>

    <body onload="tamanhooriginal()" id="page-top" class="index">
    <div id="conteudo">

       <?php include_once "navegacao.php" ?>

     <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <br>
                <h3 class="text-center">Alterar Cliente</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="alterarCliente.php" method="post" name="sentMessage" id="clienteForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" class="form-control" placeholder="Nome" id="nmCliente" maxlength="100" required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" placeholder="E-mail" id="emailCliente" required data-validation-required-message="Por Favor insira seu email">
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
                                    <h3>Tipo Cliente</h3>
                                    <select name="tipoCliente" class="form-control" placeholder="tipoCliente" id="tipoCiente">
                                        <option value="pFisica">Pessoa Física</option>
                                        <option value="pJuridica">Pessoa Juridica</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" value="<?php echo $_SESSION['celular'] ?>" maxlength="11" class="form-control" placeholder="Celular" id="celularCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CPF</label>
                                    <input type="number" name="cpf" value="<?php echo $_SESSION['cpfcnpj'] ?>" maxlength="11" class="form-control" placeholder="CPF" id="cpfCliente">
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
                                    <label for="lagradouro">Logradouro(rua, avenida, praça viela)</label>
                                    <input type="text" name="logradouro" value="<?php echo $_SESSION['logradouro'] ?>" class="form-control" placeholder="Lagradouro" id="lagradouroCliente" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="numero">Numero</label>
                                    <input type="number" name="numero" value="<?php echo $_SESSION['numero'] ?>" class="form-control" placeholder="Numero" id="numeroCliente" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" name="complemento" value="<?php echo $_SESSION['complemento'] ?>" class="form-control" placeholder="Complemento" id="complementoCliente" maxlength="20">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" name="bairro" value="<?php echo $_SESSION['bairro'] ?>" class="form-control" placeholder="Bairro" id="bairroCliente" maxlength="50">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cep">Cep</label>
                                    <input type="number" name="cep" value="<?php echo $_SESSION['cep'] ?>" class="form-control" placeholder="Cep" id="cepCliente">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" name="cidade" value="<?php echo $_SESSION['cidade'] ?>" class="form-control" placeholder="Cidade" id="cidadeCliente" maxlength="50">
                                </div>
                            </div>
                             <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="estado">Estado</label>
                                    <input type="text" name="estado" value="<?php echo $_SESSION['estado'] ?>" class="form-control" placeholder="Estado" id="estadoCliente" maxlength="2">
                                </div>
                            </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                                    <button type="reset" class="btn btn-success btn-lg" onclick="location.href='index.php'">Cancelar</button>
                                     <button type="reset" class="btn btn-success btn-lg" onclick="location.href='deletarCliente.php'">Deletar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
        </section>
        <?php
         //Validando os Dados
         

            if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cpf']))     {
                    //Cadastro ou Alteração dos Dados
                    $id = $_SESSION['id'];
                    include_once "conexao.php";
                    $nmCliente = $_POST["nome"];
                    $emailCliente = $_POST["email"];
                    $senhaCliente = $_POST["senha"];
                    $celularCliente = $_POST["celular"];
                    $cnpj_cpfCliente= $_POST["cpf"];
                    $lagradouroCliente = $_POST["logradouro"];
                    $numeroCliente = $_POST["numero"];
                    $complementoCliente = $_POST["complemento"];
                    $bairroCliente = $_POST["bairro"];
                    $cidadeCliente = $_POST["cidade"];
                    $estadoCliente = $_POST["estado"];

                    $sql = "UPDATE cliente SET nmCliente='$nmCliente', emailCliente='$emailCliente', senhaCliente='$senhaCliente', celularCliente='$celularCliente', cnpj_cpfCliente='$cnpj_cpfCliente', logradouroCliente='$lagradouroCliente', numeroCliente='$numeroCliente', complementoCliente='$complementoCliente', bairroCliente='$bairroCliente', cidadeCliente='$cidadeCliente', estadoCliente='estadoCliente' WHERE idcliente='$id'";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Atualização efetuado com sucesso!')
                                    window.open('index.php','_self')</script>";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }
    ?>
        <?php include_once "rodape.php" ?>
    </body>
</html>


