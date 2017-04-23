<?php 
session_start();
include_once "conexao.php";

$id = $_SESSION['id'];
$sql = "DELETE FROM visitante WHERE idVisitante='$id'";
	 if ($conn->query($sql) === TRUE) {
	 		unset($_SESSION['emailAdm']);
	 	    session_destroy();
	        echo "<script>alert('Cadastro excluido com sucesso!')
	                      window.open('index.php','_self')</script>";
	 } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
                                  }

$conn->close();
?>
