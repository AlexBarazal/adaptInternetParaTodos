<?php

// establishing the MySQLi connection

session_start();

include_once("conexao.php");

if (mysqli_connect_error())

{

echo "MySQLi Connection was not established: ". mysqli_connect_error();

}

// checking the user

if(isset($_POST['email'])){

$email = mysqli_real_escape_string($conn,$_POST['email']);

$senha = mysqli_real_escape_string($conn,$_POST['senha']);

$usuario = mysqli_query($conn,"SELECT * FROM administrador WHERE emailAdm='$email' AND senhaAdm='$senha'");

$check_user = mysqli_num_rows($usuario);

if($check_user>0){

$_SESSION['email']=$email;

echo "<script>window.open('index.php','_self')</script>";

}

else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}

?>