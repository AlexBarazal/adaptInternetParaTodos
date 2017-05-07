<?php
		/*$servername = "127.0.0.1";
		$username = "root";
		$password = "";
		$dbname = "adapt";

		// Create connection
		//$conn = mysqli_connect($servername, $username, $password);
		$conn =  mysqli_connect("$servername","$username","$password", "$dbname");
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		/*else{
			echo "Conectado com successo <br><br>";
		}*/
		$servername = "us-cdbr-iron-east-03.cleardb.net";
		$username = "b6728f1165e4eb";
		$password = "1d141cc4";
		$dbname = "heroku_62412756b30001a";

		// Create connection
		//$conn = mysqli_connect($servername, $username, $password);
		$conn =  mysqli_connect("$servername","$username","$password", "$dbname");
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
 ?>