<?php
		$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "adapt";

		// Create connection
		//$conn = mysqli_connect($servername, $username, $password);
		$conn =  mysqli_connect("$servername","$username","$password", "$dbname");
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}else{
			echo "Conectado com successo <br><br>";
		}

		/*
		$sql = "INSERT INTO visitante (nmVisitante,emailVisitante, senhaVisitante, celularVisitante, dtNascimentoVisitante, tipoDeficienciaVisitante) VALUES ('alex', 'alexbarazal@gmail.com', '123456', '13974073243', '11091986', 'nenhuma' )";

		if ($conn->query($sql) === TRUE) {
  			  echo "Novo registro criado com sucesso";
		} else {
    		  echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();*/
	
 ?>
