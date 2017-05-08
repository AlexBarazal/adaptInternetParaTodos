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

    <body id="page-top" class="index">

       <?php include_once "navegacao.php" ?>

     <!-- Contact Section -->
        <section id="contact">
            <div class="container">
                <br>
                <h3 class="text-center">Adicionar Pasta de Arquivos</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="cadastroPastaArquivo.php" name="sentMessage" id="pastaArquivoForm" method="post" novalidate>
                             <div class="row control-group">

                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeProdutor">Nome Cliente</label>
                                    <input type="text" name="nomeCliente" value="<?php echo $_SESSION['nome'] ?>"  class="form-control" placeholder="Nome Cliente" id="nomeClientePastaArquivo" maxlength="100" required>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomePasta">Nome da Pasta</label>
                                    <input type="text" name="nomePasta" class="form-control" placeholder="Nome da Pasta" id="nomePastaArquivo" maxlength="80" required>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="url">Link da Pasta</label>
                                    <input type="text" name="url" class="form-control" placeholder="Link" id="urlPastaArquivo" maxlength="200" required>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tamanho">Tamanho do Arquivo</label>
                                    <input type="text" name="tamanho" class="form-control" placeholder="Tamanho" id="tamanhoPastaArquivo">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="formato">Formato do Arquivo(ex: .mp4, .pdf)</label>
                                    <input type="text" name="formato" class="form-control" placeholder="Formato" id="formatoPastaArquivo">
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
         //Validando os Dados
         //include_once "cabecalho.php";
         //echo print_r($_SESSION);
            if(isset($_POST['nomePasta']) && isset($_POST['url']))
                    {            
                    include_once "conexao.php";
                    $idCliente = $_SESSION['id'];
                    $nmCliente = $_SESSION['nome'];
                    $nmPastaArquivo = $_POST["nomePasta"];
                    $urlPastaArquivo = $_POST["url"];
                    $tamanhoPastaArquivo = $_POST["tamanho"];
                    $formatoPastaArquivo = $_POST["formato"];

                    $sql = "INSERT INTO pastaarquivo (nmPastaArquivo, urlPastaArquivo, tamanhoPastaArquivo, formatoPastaArquivo, idCliente) VALUES ('$nmPastaArquivo', '$urlPastaArquivo', '$tamanhoPastaArquivo', '$formatoPastaArquivo', '$idCliente')";

                    if ($conn->query($sql) === TRUE) {
                         echo "<script>alert('Pasta Cadastrada com sucesso')
                                window.open('cadastroConteudo.php','_self')</script>";
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    $conn->close();
                }
    ?>
        <?php include_once "rodape.php" ?>
    </body>
</html>


