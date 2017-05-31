<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>
     
    <?php
   
        // A sessão precisa ser iniciada em cada página diferente
        if (!isset($_SESSION)) session_start();
        
        $nivel_necessario = 3;
        
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
                <h3 class="text-center">Cadastro de Administrador</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form name="cadastroAdm" id="admForm" action="cadastroAdm.php" method="post">
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Nome</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome" id="nmAdm" maxlength="100" required data-validation-required-message="Favor inserir o nome!">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" class="form-control" placeholder="E-mail" id="emailAdm" required data-validation-required-message="Favor inserir o email">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senha">Senha</label>
                                    <input type="password" name="senha" class="form-control" placeholder="Senha" id="senhaAdm" minlength="8" maxlength="16" required data-validation-required-message="Favor inserir a senha de 8 a 16 digitos">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <!--div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="senhaC">Confirme a Senha</label>
                                    <input type="password" name="senhaC" class="form-control" placeholder="Confirme a Senha" id="senhaAdmC" minlength="8" maxlength="16" required data-validation-required-message="Favor confirmar a senha">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div-->
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="celular">Celular</label>
                                    <input type="number" name="celular" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" class="form-control" placeholder="Celular" id="celularAdm" required data-validation-required-message="Favor inserir o celular">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="dataNascimento">Data Nascimento</label>
                                    <input type="number" name="dataNascimento" class="form-control" placeholder="Data de Nascimento" id="dtNascimentoAdm" required data-validation-required-message="Favor inserir data de nascimento">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 ">
                                    <input type="text" name="" class="form-control" placeholder="Sexo" id="" readonly="true" required data-validation-required-message="Favor selecionar sexo">
                                    <select name="sexo" class="form-control" placeholder="Sexo" id="sexoAdm">
                                        <option value="Masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cpf">CPF</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="CPF" id="cpfAdm" required data-validation-required-message="Favor inserir cpf">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="rg">RG</label>
                                    <input type="text" name="rg" class="form-control" placeholder="RG" id="rgAdm" required data-validation-required-message="Favor inserir rg">
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
        <?php
          
          
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
                                  echo "<script>alert('Cadastro efetuado com sucesso!')
                                        window.open('index.php','_self')</script>";
                            } else {
                                  echo "Erro: " . $sql . "<br>" . $conn->error;
                                  }
                        $conn->close();
                        }
        
    ?>
        <?php include_once "rodape.php" ?>
    </div>  
    </body>
</html>


