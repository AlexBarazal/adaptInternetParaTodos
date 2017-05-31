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
                <h3 class="text-center">Consulta Administrador</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form name="pesquisarAdm" id="cAdmForm" action="pesquisarAdm.php" method="post">
                        <div id="cAdm">   
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Pequisar por ID:</label>
                                    <input type="number" name="id" class="form-control" placeholder="Pesquisar por ID:" id="nmAdm" maxlength="100">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Pesquisar por NOME:</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Pesquisar por NOME:" id="nmAdm" maxlength="100" >
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 floating-label-form-group controls">
                                    <label for="nome">Pequisar por CPF:</label>
                                    <input type="number" name="cpf" class="form-control" placeholder="Pesquisar por CPF:" id="nmAdm" maxlength="100">
                                <p class="help-block text-danger"></p>
                                </div>
                            </div>
                             <div class="row">
                                <div class="form-group col-xs-12">
                                    <button type="submit" class="btn btn-success btn-lg" >Pesquisar <i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <br>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php 
            
                include_once "conexao.php";
                    $pid = $_POST["id"];
                    $nome = $_POST["nome"];
                    $cpf = $_POST["cpf"];
                    $sql = "";
                    if(!empty($_POST['id'])){
                        $sql = "SELECT * FROM administrador WHERE idAdm = $pid";
                        echo "<h5 class='text-center'>Consulta por ID:</h5>";
                    }elseif(!empty($_POST['nome'])){
                        $sql = "SELECT * FROM administrador WHERE nmAdm = '$nome'";
                        echo "<h5 class='text-center'>Consulta por NOME:</h5>";
                    }elseif(!empty($_POST['cpf'])){
                        $sql = "SELECT * FROM administrador WHERE cpfAdm = $cpf"; 
                        echo "<h5 class='text-center'>Consulta por CPF:</h5>";
                    }else{
                        echo "Digite valor para consultar!";
                    }
                    
                    if ($sql != "") {
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    echo "<div class='table-responsive'>
                                <table class='table' align='center'
                        border=1>
                                    <tr>
                                    <th>ID</th>
                                    <th>NOME</th>
                                    <th>EMAIL</th>
                                    <th>SENHA</th>
                                    <th>CELULAR</th>
                                    <th>NASCIMENTO</th>
                                    <th>SEXO</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    </tr>";
                        while($row = $result->fetch_assoc()) {

                            echo "  <tr>
                                    <td>".$row["idAdm"]."</td>
                                    <td>".$row["nmAdm"]."</td>
                                    <td>".$row["emailAdm"]."</td>
                                    <td>".$row["senhaAdm"]."</td>
                                    <td>".$row["celularAdm"]."</td>
                                    <td>".$row["dtNascimentoAdm"]."</td>
                                    <td>".$row["sexoAdm"]."</td>
                                    <td>".$row["cpfAdm"]."</td>
                                    <td>".$row["rgAdm"]."</td>
                                    </tr>";
                                  
                        }
                    } else {
                        echo "<h4>Não exsite<h4>";
                    } echo "</table><br><br><br>
                    </div>";
                $conn->close();
            }
            

        ?>
        <?php include_once "rodape.php" ?>
    </div>
    </body>
</html>


