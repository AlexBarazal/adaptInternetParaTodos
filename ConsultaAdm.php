<?php 
include_once "conexao.php";

$sql = "SELECT * FROM administrador";
$result = $conn->query($sql);
echo "<table border=1>
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
if ($result->num_rows > 0) {
    // output data of each row
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
    echo "0 results";
} echo "</table>";
$conn->close();
?>
<br><br>
<a href="index.php">Voltar</a>