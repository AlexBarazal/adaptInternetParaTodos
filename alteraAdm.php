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
                <h2 class="text-center">Alterar Cadastro</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="" name="alteraAdm" id="admForm" method="post" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" value="<?php print $_SESSION['nome']; ?>" name="nome" class="form-control" placeholder="Nome" id="nmAdm" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" value="<?php print $emailAdm; ?>" name="email" class="form-control" placeholder="E-mail" id="emailAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="senhaAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaAdmC">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" value="<?php print $celularAdm; ?>" name="celular" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" class="form-control" placeholder="Celular" id="celularAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="dataNascimento">Data Nascimento</label>
                                    <input type="number" value="<?php print $dataNascimentoAdm; ?>" name="dataNascimento" class="form-control" placeholder="Data de Nascimento" id="dtNascimentoAdm">
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
                                    <input type="number" value="<?php print $cpfAdm; ?>" name="cpf" class="form-control" placeholder="CPF" id="cpfAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="rg">RG</label>
                                    <input type="text" value="<?php print $rgAdm; ?>" name="rg" class="form-control" placeholder="RG" id="rgAdm">
                                </div>
                            </div>

                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                                    <!--button type="submit" class="btn btn-success btn-lg">Exluir</button-->
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
                    if(empty($_POST["nome"]))
                        echo "<script>alert('Campo nome Obrigatório!');</script>";
                    else
                    if(empty($_POST["email"]))
                        echo "<script>alert('Campo email Obrigatório!');</script>";
                    else
                    if(empty($_POST["senha"]))
                        echo "<script>alert('Campo senha Obrigatório!');</script>";  
                    else
                    if(empty($_POST["celular"]))
                        echo "<script>alert('Campo celular Obrigatório!');</script>";
                    else{
                   
                   /* $sql = "Update administrador SET nmAdm=$nmAdm, emailAdm=$email, senhaAdm=$sexoAdm, celularAdm=$celularAdm, dtNascimentoAdm=$dataNascimentoAdm, sexoAdm=$sexoAdm, cpfAdm=$cpfAdm, rgAdm=$rgAdm WHERE idAdm=$_SESSION['idAdm']" ;

                    if ($conn->query($sql) === TRUE) {
                          echo "<script>alert('Alteração efetuado com sucesso!');</script>";;
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    */}
                    $conn->close();
                }
    ?>
        <?php include_once "rodape.php" ?>
        
    </body>
</html>


