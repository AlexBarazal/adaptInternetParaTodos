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
                <h2 class="text-center">Cadastro de Administrador</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="" name="cadastroAdm" id="admForm" method="post" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nmAdm" maxlength="100"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" id="emailAdm" required data-validation-required-message="Por Favor insira seu email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="senhaAdm" required data-validation-required-message="Por Favor insira sua senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaAdmC" required data-validation-required-message="Por Favor insira sua Senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" class="form-control" placeholder="Celular" id="celularAdm" required data-validation-required-message="Por Favor insira seu celular">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="dataNascimento">Data Nascimento</label>
                                    <input type="number" name="dataNascimento" class="form-control" placeholder="Data de Nascimento" id="dtNascimentoAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 ">
                                    <h3>Sexo</h3>
                                    <select name="sexo" class="form-control" placeholder="Sexo" id="sexoAdm">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CPF</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="CPF" id="cpfAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="rg">RG</label>
                                    <input type="text" name="rg" class="form-control" placeholder="RG" id="rgAdm">
                                </div>
                            </div>

                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Limpar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Alterar</button>
                                    <button type="submit" class="btn btn-success btn-lg">Excluir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
         //Validando os Dados
            if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['celular']))
                    {
                    include_once "conexao.php";

                    $nmAdm = $_POST["nome"];
                    $emailAdm = $_POST["email"];
                    $senhaAdm = $_POST["senha"];
                    $celularAdm = $_POST["celular"];
                    $dtNascimentoAdm = $_POST["dataNascimento"];
                    $sexoAdm = $_POST["sexo"];
                    $cpfAdm= $_POST["cpf"];
                    $rgAdm = $_POST["rg"];


                    $sql = "INSERT INTO administrador (nmAdm, emailAdm, senhaAdm, celularAdm, dtNascimentoAdm, sexoAdm, cpfAdm, rgAdm) VALUES ('$nmAdm', '$emailAdm', '$senhaAdm', '$celularAdm', '$dtNascimentoAdm', '$sexoAdm', '$cpfAdm', '$rgAdm')";

                    if ($conn->query($sql) === TRUE) {
                          echo "Novo registro criado com sucesso";
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                    $conn->close();
                }
    ?>
        
        <?php include_once "rodape.php" ?>
    </body>
</html>


