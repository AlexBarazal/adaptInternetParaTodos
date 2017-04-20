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
                <h2 class="text-center">Adicionar Descrição de Conteúdo</h2>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form name="cadastroDescricaoConteudo" id="descricaoConteudoForm" novalidate>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nomeConteudo">Nome Contéudo</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="nmConteudo" class="form-control" placeholder="Nome Conteúdo" id="nmConteudo" maxlength="500">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="conteudoProgramatico">Conteúdo Programático</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="conteudoProgramatico" class="form-control" placeholder="Conteúdo Progarmático" id="conteudoProgramatico" maxlength="500">
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="objetivo">Objetivo</label>
                                    <!-- Este campo vai pegar o nome da pasta deste conteúdo-->
                                    <input type="text" name="objetivo" class="form-control" placeholder="Objetivo" id="objetivo" maxlength="100">
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
                                    <label for="objetivo">Objetivo</label>
                                    <input type="text" name="objetivo" class="form-control" placeholder="Objetivo Programático" id="objetivo" maxlength="100">
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
            if(isset($_POST['nomeConteudo']) && isset($_POST['conteudoProgramatico']) && isset($_POST['objetivo']) && isset($_POST['cargaHoraria']) && isset($_POST['tipo']))
                    {
                    include_once "conexao.php";

                    $nmConteudo = $_POST["nomeConteudo"];
                    $conteudoProgramatico = $_POST["conteudoProgramatico"];
                    $cargaHoraria = $_POST["cargaHoraria"];
                    $tipoArquivo = $_POST["tipoArquivo"];
                    //$idConteudo = Pegar id dos cokkies

                    $sql = "INSERT INTO descricaoconteudo (nmConteudo, conteudoProgramatico,cargaHoraria, tipoArquivo, idConteudo) VALUES ('$nmConteudo', '$conteudoProgramatico', '$cargaHoraria', '$tipoArquivo', '$idConteudo')";

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


