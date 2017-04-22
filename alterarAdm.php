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
                <h2 class="text-center">Alterar Administrador</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="alterarAdm.php" name="sentMessage" id="admForm" method="post" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" value="<?php echo $_SESSION['nome'] ?>" class="form-control" placeholder="Nome" id="nmAdm" required data-validation-required-message="Favor inserir o nome!">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" class="form-control" placeholder="E-mail" id="emailAdm" required data-validation-required-message="Favor inserir o email">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" value="" class="form-control" placeholder="Senha" id="senhaAdm" minlength="8" maxlength="16" required data-validation-required-message="Favor inserir a senha de 8 a 16 digitos">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaAdmC" minlength="8" maxlength="16" required data-validation-required-message="Favor confirmar a senha">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" value="<?php echo $_SESSION['celular'] ?>" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" class="form-control" placeholder="Celular" id="celularAdm" required data-validation-required-message="Favor inserir o celular">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="dataNascimento">Data Nascimento</label>
                                    <input type="number" name="dataNascimento" value="<?php echo $_SESSION['dtnasc'] ?>" class="form-control" placeholder="Data de Nascimento" id="dtNascimentoAdm">
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
                                    <input type="number" name="cpf" value="<?php echo $_SESSION['cpf'] ?>" class="form-control" placeholder="CPF" id="cpfAdm">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="rg">RG</label>
                                    <input type="text" name="rg" value="<?php echo $_SESSION['rg'] ?>" class="form-control" placeholder="RG" id="rgAdm">
                                </div>
                            </div>

                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg">Atualizar</button>
                                    <button type="reset" class="btn btn-success btn-lg">Limpar</button>
                                    <button type="reset" class="btn btn-success btn-lg" onclick="location.href='index.php'">Cancelar</button>
                                     <button type="reset" class="btn btn-success btn-lg" onclick="location.href='deletarAdm.php'">Deletar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php
          
               if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['celular']))
                        {
                            $id = $_SESSION['id'];
                            echo $id;
                            include_once "conexao.php";
                            $nmAdm = $_POST["nome"];
                            $emailAdm = $_POST["email"];
                            $senhaAdm = $_POST["senha"];
                            $celularAdm = $_POST["celular"];
                            $dtNascimentoAdm = $_POST["dataNascimento"];
                            $sexoAdm = $_POST["sexo"];
                            $cpfAdm= $_POST["cpf"];
                            $rgAdm = $_POST["rg"];
                            $sql = "UPDATE administrador SET nmAdm='$nmAdm', emailAdm='$emailAdm', senhaAdm='$senhaAdm', celularAdm='$celularAdm', dtNascimentoAdm='$dtNascimentoAdm', sexoAdm='$sexoAdm', cpfAdm='$cpfAdm', rgAdm='$rgAdm' WHERE idAdm='$id'";

                            if ($conn->query($sql) === TRUE) {
                                  echo "<script>alert('Alteração efetuada com sucesso!')
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