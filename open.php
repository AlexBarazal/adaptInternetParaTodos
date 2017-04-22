<?php

// establishing the MySQLi connection

session_start();

include_once("conexao.php");

if (mysqli_connect_errno())

{

    echo "MySQLi Connection was not established: ". mysqli_connect_error();

}

// checking the user

if(isset($_POST['email'])){

    $email = mysqli_real_escape_string($conn,$_POST['email']);

    $senha = mysqli_real_escape_string($conn,$_POST['senha']);

    $usuario = mysqli_query($conn,"SELECT * FROM administrador WHERE emailAdm='$email' AND senhaAdm='$senha'") or die (mysql_error());

    $check_user = mysqli_num_rows($usuario);

if($check_user>0){

    $_SESSION['email']=$email;
    
    while($dados = mysqli_fetch_array($usuario, MYSQLI_BOTH)){
        $_SESSION['nome'] = $dados['nmAdm'];
        $_SESSION['id'] = $dados['idAdm'];
        $_SESSION['celular'] = $dados['celularAdm'];
        $_SESSION['dtNasc'] = $dados['dtNascimentoAdm'];
        $_SESSION['sexo'] = $dados['sexoAdm'];
        $_SESSION['cpf'] = $dados['cpfAdm'];
        $_SESSION['rg'] = $dados['rgAdm'];
    }

    echo "<script>window.open('index.php','_self')</script>";

}

else {

    echo "<script>
            alert('Email or password is not correct, try again!')
            window.open('login.php','_self')
          </script>";

}

}

?>