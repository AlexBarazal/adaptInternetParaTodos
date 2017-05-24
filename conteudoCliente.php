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
                <h3 class="text-center">Contéudo Cliente</h3>
                <hr>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                        <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                        <form action="conteudoCliente.php" name="sentMessage" id="conteudoForm" method="post">
                        <?php
                            pArquivo();
                         ?>

        </section>
        <?php include_once "rodape.php" ?>
        <?php 
            function  pArquivo(){
                include_once "conexao.php";
                            $sql = "SELECT * FROM pastaarquivo WHERE idCliente = $_SESSION[id]";
                            $r1 = $conn->query($sql);
                            if ($r1->num_rows > 0) {
                                while($row = $r1->fetch_assoc()) {
                                    echo "<br>Nome da Pasta: " .$row["nmPastaArquivo"];
                                    $idPastaA = $row["idPastaArquivo"];
                                    conteudo($idPastaA);
                                    echo " teste" .$idPastaA;
                                }
                            }else {
                                echo "Não existe pasta deste cliente";
                            }
                $conn->close();
            }
                
            function  conteudo($idPastaA){
                include_once "conexao.php";
                            $sql = "SELECT * FROM conteudo WHERE idPastaArquivo = $idPastaA";
                            $r2 = $conn->query($sql);
                            if ($r2->num_rows > 0) {
                                while($row = $r2->fetch_assoc()) {
                                    echo "<br>Nome do conteudo: " .$row["nmConteudo"];
                                    }
                            }else {
                                echo "Não existe conteudo nessa pasta";
                            } 
                $conn->close();
            }
/*

                                    $sql = "SELECT * FROM descricaoConteudo WHERE idConteudo = $row[idConteudo]";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()) {
                                            echo "<br>Conteudo Programatico: " .$row["conteudoProgramatico"];
                                        }
                                    } else {
                                    echo "Não existe conteudo programatico neste contéudo";
                                    } 
                                } */



        ?>
    </body>
</html>


