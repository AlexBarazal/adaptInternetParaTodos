<?php
            if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['cpf']))     {
                   
                    include_once "conexao.php";
                    $nmCliente = $_POST["nome"];
                    $emailCliente = $_POST["email"];
                    $senhaCliente = $_POST["senha"];
                    $celularCliente = $_POST["celular"];
                    $cnpj_cpfCliente= $_POST["cpf"];
                    $lagradouroCliente = $_POST["lagradouro"];
                    $numeroCliente = $_POST["numero"];
                    $complementoCliente = $_POST["complemento"];
                    $bairroCliente = $_POST["bairro"];
                    $cidadeCliente = $_POST["cidade"];
                    $estadoCliente = $_POST["estado"];

                    $sql = "INSERT INTO cliente (nmCliente, emailCliente, senhaCliente, celularCliente, cnpj_cpfCliente, logradouroCliente, numeroCliente, complementoCliente, bairroCliente, cidadeCliente, estadoCliente) VALUES ('$nmCliente', '$emailCliente', '$senhaCliente', '$celularCliente', '$cpf_cnpjCliente', '$lagradouroCliente', '$numeroCliente', '$complementoCliente', '$bairroCliente', '$cidadeCliente', '$estadoCliente')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<script>alert('Cadastro efetuado com sucesso!')
                                    window.open('index.php','_self')</script>";
                    } else {
                        echo "Erro: " . $sql . "<br>" . $conn->error;
                    }

                    $conn->close();
                }
    ?>