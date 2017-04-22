<?php 
session_start();

include_once "conexao.php";

$id = $_SESSION['id'];
$sql = "DELETE FROM cliente WHERE idCliente='$id'";
 if ($conn->query($sql) === TRUE) {
 		unset($_SESSION['emailCliente']);
 	    session_destroy();
        echo "<script>alert('Cadastro excluido com sucesso!')
                      window.open('index.php','_self')</script>";
 } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
                                  }

$conn->close();
?>
