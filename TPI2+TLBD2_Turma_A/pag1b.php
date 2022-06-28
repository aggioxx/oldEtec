<!DOCTYPE html>
<?php
	require("conecta.php")
?>
<html>
	<head>
		<title>pag1b</title>
	</head>
	<body>
		<?php
			$cidade = $_POST["cidade"];
			$UF = $_POST["UF"];
			$sql = "SELECT * FROM `tabela_x` WHERE cidade LIKE '%" . $cidade . "%' AND UF LIKE '%" . $UF . "%' GROUP BY cidade ORDER BY cidade";

			$resultado = mysqli_query($conn, $sql); 
			if (mysqli_num_rows($resultado)< 0) {
				echo 'Sem resultados';
			} else {
				echo "<table>";
				echo "<tr>";
				echo "<th>Cidade</th>";
				echo "<th>UF</th>";
				echo "</tr>";
			while($row = mysqli_fetch_assoc($resultado)) {				
				echo "<tr>";
				echo "<td>" . $row['cidade'] . "</td>";
				echo "<td>" . $row['UF'] . "</td>";
				echo "</tr>";
			}			
				echo "</table>";
		}
		?>
	</body>
</html>