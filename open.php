<?php
session_start();
include_once("conexao.php");
if (mysqli_connect_errno())
    {
        echo "MySQLi não conectado: ". mysqli_connect_error();
    }
// checking the user
if(isset($_POST['email'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $senha = mysqli_real_escape_string($conn,$_POST['senha']);
    $adm = mysqli_query($conn,"SELECT * FROM administrador WHERE emailAdm='$email' AND senhaAdm='$senha'");
    $check_userAdm = mysqli_num_rows($adm);
    $cliente = mysqli_query($conn,"SELECT * FROM cliente WHERE emailCliente='$email' AND senhaCliente='$senha'");
    $check_userCliente = mysqli_num_rows($cliente);
    $visitante = mysqli_query($conn,"SELECT * FROM visitante WHERE emailVisitante='$email' AND senhaVisitante='$senha'");
    $check_userVisitante = mysqli_num_rows($visitante);
    if($check_userAdm>0){
            while($dados = mysqli_fetch_array($adm, MYSQLI_BOTH)){
                $_SESSION['id'] = $dados['idAdm'];
                $_SESSION['nome'] = $dados['nmAdm'];
                $_SESSION['email']=$email;
                $_SESSION['celular'] = $dados['celularAdm'];
                $_SESSION['dtNasc'] = $dados['dtNascimentoAdm'];
                $_SESSION['sexo'] = $dados['sexoAdm'];
                $_SESSION['cpf'] = $dados['cpfAdm'];
                $_SESSION['rg'] = $dados['rgAdm'];
                $_SESSION['userNivel'] = 3;
            }
            echo "<script>window.open('index.php','_self')</script>";
    }elseif($check_userCliente>0){
            while($dados = mysqli_fetch_array($cliente, MYSQLI_BOTH)){
                $_SESSION['id'] = $dados['idCliente'];
                $_SESSION['nome'] = $dados['nmCliente'];
                $_SESSION['email']=$email;
                $_SESSION['celular'] = $dados['celularCliente'];
                $_SESSION['cpfCnpj'] = $dados['cnpj_cpfCliente'];
                $_SESSION['logradouro'] = $dados['logradouroCliente'];
                $_SESSION['numero'] = $dados['numeroCliente'];
                $_SESSION['complemento'] = $dados['complementoCliente'];
                $_SESSION['bairro'] = $dados['bairroCliente'];
                $_SESSION['cep'] = $dados['cepCliente'];
                $_SESSION['cidade'] = $dados['cidadeCliente'];
                $_SESSION['estado'] = $dados['estadoCliente'];
                $_SESSION['userNivel'] = 2;
            }
            echo "<script>window.open('index.php','_self')</script>";
    }elseif($check_userVisitante>0){
            while($dados = mysqli_fetch_array($visitante, MYSQLI_BOTH)){
                $_SESSION['id'] = $dados['idVisitante'];
                $_SESSION['nome'] = $dados['nmVisitante'];
                $_SESSION['email']=$email;
                $_SESSION['celular'] = $dados['celularVisitante'];
                $_SESSION['dataNascimento'] = $dados['dtNascimentoVisitante'];
                $_SESSION['tipoDeficiencia'] = $dados['tipoDeficienciaVisitante'];
                $_SESSION['userNivel'] = 1;
            }
            echo "<script>window.open('index.php','_self')</script>";
    }else {
        echo "<script>
                alert('Email ou senha incorretos tente novamente!')
                window.open('login.php','_self')
              </script>";
    }
}

?>