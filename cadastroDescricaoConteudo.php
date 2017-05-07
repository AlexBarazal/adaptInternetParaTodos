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
                <h3 class="text-center">Adicionar Descrição de Conteúdo</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="cadastroDescricaoConteudo.php" name="sentMessage" id="descricaoConteudoForm" method="post" novalidate>
                            <div class="row control-group" >
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                <input type="text" class="form-control" placeholder="Nome Conteúdo" id="" readonly="true">
                                <select name="nomeConteudo" id="">
                                    <?php
                                        include_once"conexao.php";
                                        $idC = $_SESSION['id'];
                                        echo $idC;
                                            $sql = "SELECT * FROM conteudo c, pastaarquivo p  WHERE p.idCliente = $idC AND  c.idPastaArquivo = p.idPastaArquivo";
                                            $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<option value=".$row["idConteudo"].">".$row["nmConteudo"]."</option>";
                                                                    }
                                                                } else {
                                                                    echo "<script>alert('Voçê não tem pasta cadastrada. Será direcionado para cadastrar a pasta')
                                window.open('cadastroPastaArquivo.php','_self');</script>";
                                                                }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="objetivo">Objetivo</label>
                                    <input type="text" name="objetivo" class="form-control" placeholder="Objetivo" id="objetivo" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="conteudoProgramatico">Conteúdo Programático</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="conteudoProgramatico" class="form-control" placeholder="Conteúdo Programático" id="conteudoProgramatico" maxlength="500">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="cargaHoraria">Carga Horário</label>
                                    <input type="text" name="cargaHorario" class="form-control" placeholder="Carga Horário" id="cargaHoraria" maxlength="100">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="tipoArquivo">Tipo de Arquivo</label>
                                    <input type="text" name="tipoArquivo" class="form-control" placeholder="Tipo" id="quantidadeArquivos" maxlength="100">
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
            if(isset($_POST['objetivo']) && isset($_POST['conteudoProgramatico']))
                    {
                    include_once "conexao.php";
                    $idConteudo = $_POST["nomeConteudo"];
                    $objetivo = $_POST["objetivo"];
                    $conteudoProgramatico = $_POST["conteudoProgramatico"];
                    $cargaHoraria = $_POST["cargaHoraria"];
                    $tipoArquivo = $_POST["tipoArquivo"];
                    //$idConteudo = Pegar id dos cokkies
                    $sql = "INSERT INTO descricaoconteudo (conteudoProgramatico, objetivo, cargaHoraria, tipoArquivo, idConteudo) VALUES ('$conteudoProgramatico', '$objetivo', '$cargaHoraria', '$tipoArquivo', '$idConteudo')";

                    if ($conn->query($sql) === TRUE) {
                          echo "<script>alert('Cadastro efetuado com sucesso!')
                                window.open('index.php _self');</script>";;
                    } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                    }
                    $conn->close();
                
    ?>

        <?php include_once "rodape.php" ?>
    </body>
</html>


