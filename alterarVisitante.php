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
                <h3 class="text-center">Alterar Visitante</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="sentMessage" id="visitanteForm" action="alterarVisitante.php" method="post">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" class="form-control" placeholder="Nome" id="nmVisitante" maxlength="100"  required data-validation-required-message="Por Favor insira seu nome">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" placeholder="E-mail" id="emailVisitante" required data-validation-required-message="Por Favor insira seu email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" value="" class="form-control" placeholder="Senha" id="senhaVisitante" required data-validation-required-message="Por Favor insira sua senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <!--div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaVisitanteC" required data-validation-required-message="Por Favor insira sua Senha">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div-->
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" value="<?php echo $_SESSION['celular'] ?>" class="form-control" placeholder="Celular" id="celularVisitante">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="dataNascimento">Data Nascimento</label>
                                    <input type="number" name="dataNascimento" value="<?php echo $_SESSION['dataNascimento'] ?>" class="form-control" placeholder="Data de Nascimento" id="dtNascimentoVisitante">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <input type="text" placeholder="Tipo de Deficiência" readonly="true">
                                    <select name="tipoDeficiencia" class="form-control" placeholder="Tipo de Deficiência" id="tipoDeficienciaVisitante">
                                        <option value="<?php echo $_SESSION['tipoDeficiencia'] ?>"> <?php echo $_SESSION['tipoDeficiencia'] ?></option>
                                        <option value="nenhuma">Nenhuma</option>
                                        <option value="visual">Visual</option>
                                        <option value="motora">Motora</option>
                                        <option value="auditiva">Auditiva</option>
                                        <option value="mental">Mental</option>
                                        <option value="fisica">Física</option>

                                    </select>
                                </div>
                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                   <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                                    <button type="reset" class="btn btn-success btn-lg" onclick="location.href='index.php'">Cancelar</button>
                                     <button type="reset" class="btn btn-success btn-lg" onclick="location.href='deletarVisitante.php'">Deletar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
         //Validando os Dados
                    if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']))
                    {
                    include_once "conexao.php";
                    $id = $_SESSION['id'];
                    $nmVisitante = $_POST['nome'];
                    $emailVisitante = $_POST['email'];
                    $senhaVisitante = $_POST['senha'];
                    $celularVisitante = $_POST['celular'];
                    $dtNascimentoVisitante = $_POST['dataNascimento'];
                    $tipoDeficienciaVisitante = $_POST['tipoDeficiencia'];

                    $sql = "UPDATE visitante SET nmVisitante='$nmVisitante', emailVisitante='$emailVisitante', senhaVisitante='$senhaVisitante', celularVisitante='$celularVisitante', dtNascimentoVisitante='$dtNascimentoVisitante', tipoDeficienciaVisitante='$tipoDeficienciaVisitante' WHERE idVisitante='$id'";

                    if ($conn->query($sql) === TRUE) {
                         echo "<script>alert('Atualização efetuado com sucesso!')
                                window.open('index.php','_self')</script>";
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                    $conn->close();
                    }
    ?>
        <?php include_once "rodape.php" ?>
    </body>
</html>


