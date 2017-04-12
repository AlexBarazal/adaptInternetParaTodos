<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <!--Navigation-->
    <?php include_once "cabecalho.php" ?>

</head>

    <body id="page-top" class="index">
    <?php
         //Validando os Dados
         if(isset($_POST["nmAdm"]) && isset($_POST["emailAdm"]) && isset($_POST["senhaAdm"]) && isset($_POST["celularAdm"]) && isset($_POST["dtNascimentoAdm"]) && isset($_POST["sexoAdm"]) && isset($_POST["cpfAdm"]) && isset($_POST["rgAdm"]))
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

                    $nmAdm = $_POST["nmAdm"];
                    $emailAdm = $_POST["emailAdm"];
                    $senhaAdm = $_POST["senhaAdm"];
                    $celularAdm = $_POST["celularAdm"];
                    $dtNascimentoAdm = $_POST["dtNascimentoAdm"];
                    $sexoAdm = $_POST["sexoAdm"];
                    $cpfAdm= $_["cpfAdm"];
                    $rgAdm = $_["rgAdm"];

                    $stmt = $obj_mysqli->prepare("INSERT INTO administrador('nmAdm','emailAdm','senhaAdm','celularAdm','dtNascimentoAdm','sexoAdm','cpfAdm','rgAdm')VALUES(?,?,?,?,?,?,?,?)");
                    $stmt->blind_param('ssssssss', $nmAdm, $emailAdm, $senhaAdm, $celularAdm, $dtNascimentoAdm, $sexoAdm, $cpfAdm, $rgAdm);

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
                        <form action="<?=$SERVER["PHP_SELF"]?> name="cadastroAdm" id="admForm" method="POST" novalidate>
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


