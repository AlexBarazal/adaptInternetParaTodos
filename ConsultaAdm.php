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
		        <th>EDITAR</th>
		        <th>EXCLUIR</th>
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
		        <td><button type='submit' class='btn btn-success btn-lg'>EDITAR</button></td>
		        <td><button type='submit' class='btn btn-success btn-lg'>EXCLUIR</button></td>
		      	</tr>";
		      
    }
} else {
    echo "0 results";
} echo "</table>";



echo "<h3>Consulta Cliente</h3>";
$sql = "SELECT * FROM Cliente";
$result = $conn->query($sql);
echo "<table border=1>
        		<tr>
        		<th>ID</th>
		        <th>NOME</th>
		        <th>EMAIL</th>
		        <th>SENHA</th>
		        <th>TIPO</th>
		        <th>CELULAR</th>
		        <th>LAGRADOURO</th>
		        <th>NUMERO</th>
		        <th>COMPLEMENTO</th>
		        <th>BAIRRO</th>
		        <th>CIDADE</th>
		        <th>ESTADO</th>
		        <th>EDITAR</th>
		        <th>EXCLUIR</th>
		        </tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr>
		        <td>".$row["idCliente"]."</td>
		        <td>".$row["nmCliente"]."</td>
		        <td>".$row["emailCliente"]."</td>
		        <td>".$row["senhaCliente"]."</td>
		        <td>".$row["tipoCliente"]."</td>
		        <td>".$row["celularCliente"]."</td>
		        <td>".$row["logradouroCliente"]."</td>
		        <td>".$row["numeroCliente"]."</td>
		        <td>".$row["complementoCliente"]."</td>
		        <td>".$row["bairroCliente"]."</td>
		        <td>".$row["cidadeCliente"]."</td>
				<td>".$row["estadoCliente"]."</td>
				<td><button type='submit' class='btn btn-success btn-lg'>EDITAR</button></td>
				<td><button type='submit' class='btn btn-success btn-lg'>EXCLUIR</button></td>
		      	</tr>";
		      
    }
} else {
    echo "0 results";
} echo "</table>";

echo "<h3>Consulta Cliente</h3>";
$sql = "SELECT * FROM visitante";
$result = $conn->query($sql);
echo "<table border=1>
        		<tr>
	        		<th>ID</th>
			        <th>NOME</th>
			        <th>EMAIL</th>
			        <th>SENHA</th>
			        <th>CELULAR</th>
			        <th>NASCIMENTO</th>
			        <th>TIPO DEFICIENCIA</th>
			        <th>EDITAR</th>
			        <th>EXCLUIR</th>
		        </tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <tr>
			        <td>".$row["idVisitante"]."</td>
			        <td>".$row["nmVisitante"]."</td>
			        <td>".$row["emailVisitante"]."</td>
			        <td>".$row["senhaVisitante"]."</td>
			        <td>".$row["celularVisitante"]."</td>
			        <td>".$row["dtNascimentoVisitante"]."</td>
			        <td>".$row["tipoDeficienciaVisitante"]."</td>
			        <td><button type='submit' class='btn btn-success btn-lg'>EDITAR</button></td>
			        <td><button type='submit' class='btn btn-success btn-lg'>EXCLUIR</button></td>
		        </tr>";
		      
    }
} else {
    echo "0 results";
} echo "</table>";
$conn->close();
?>
<br><br>
<a href="index.php">Voltar</a>