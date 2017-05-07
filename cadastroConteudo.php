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
                <h3 class="text-center">Adicionar Conteúdo</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="cadastroConteudo.php" name="sentMessage" id="conteudoForm" method="post" novalidate>

                            
                            <div class="row control-group" >
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="text" class="form-control" placeholder="Nome Pasta" id="" readonly="true">
                                <select name="nomePasta" id="">
                                    <?php

                                        include_once"conexao.php";
                                        $idC = $_SESSION['id'];
                                        echo $idC;
                                            $sql = "SELECT * FROM pastaarquivo WHERE idCliente=$idC" ;
                                            $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<option value=".$row["idPastaArquivo"].">".$row["nmPastaArquivo"]."</option>";
                                                                    }
                                                                } else {
                                                                    echo "<script>alert('Voçê não tem pasta cadastrada. Será direcionado para cadastrar a pasta')
                                window.open('casdastroPastaArquivo.php','_self');</script>";
                                                                }
                                    ?>
                                </select>
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
            if(isset($_POST['nomeConteudo']) && isset($_POST['tipoConteudo']))
                    {
                    include_once "conexao.php";
                    $idPastaArquivo = $_POST["nomePasta"];
                    $nmConteudo = $_POST["nomeConteudo"];
                    $tipoConteudo = $_POST["tipoConteudo"];
                    $sql = "INSERT INTO conteudo (nmConteudo, tipoConteudo, idPastaArquivo) VALUES ('$nmConteudo', '$tipoConteudo', '$idPastaArquivo')";
                    if ($conn->query($sql) === TRUE) {
                          echo "<script>alert('Cadastro efetuado com sucesso!')
                                window.open('index.php','_self');</script>";
                   }else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    }
                    $conn->close();
    ?>

        <?php include_once "rodape.php" ?>
    </body>
</html>


