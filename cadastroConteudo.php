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
                <h2 class="text-center">Adicionar Conteúdo</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroConteudo" id="conteudoForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomePasta">Nome da Pasta</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="nomePasta" class="form-control" placeholder="Nome da Pasta" id="nomePastaArquivo" maxlength="80">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeConteudo">Nome Conteúdo</label>
                                    <input type="text" name="nomeConteudo" class="form-control" placeholder="Nome" id="nomeConteudo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tipoConteudo">Tipo Conteúdo</label>
                                    <input type="text" name="tipoConteudo" class="form-control" placeholder="Tipo" id="tipoConteudo" maxlength="100">
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
            if(isset($_POST['nomePasta']) && isset($_POST['nomeConteudo']) && isset($_POST['tipoConteudo']))
                    {
                    include_once "conexao.php";

                    $nmPastaArquivo = $_POST["nomePasta"];
                    $nmConteudo = $_POST["nomeConteudo"];
                    $tipoConteudo = $_POST["tipoConteudo"];
                    
                    if(empty($_POST["nomePasta"]))
                        echo "<script>alert('Campo nome da Pasta Obrigatório!');</script>";
                    else
                    if(empty($_POST["nmConteudo"]))
                        echo "<script>alert('Campo nome do contéudo Obrigatório!');</script>";
                    else
                    if(empty($_POST["tipoConteudo"]))
                        echo "<script>alert('Campo tipo de contéudo Obrigatório!');</script>";
                    else{

                    $sql = "INSERT INTO conteudo (nmPastaArquivo, nmConteudo, tipoConteudo) VALUES ('$nmPastaArquivo', '$nmConteudo', '$tipoConteudo')";

                    if ($conn->query($sql) === TRUE) {
                          echo "<script>alert('Cadastro efetuado com sucesso!');</script>";;
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    }
                    $conn->close();
                }
    ?>

        <?php include_once "rodape.php" ?>
    </body>
</html>


