<!DOCTYPE html>
<html>
	<head>
		<title>Pagina 3b</title>
	</head>
	<body>
		<?php
			require("conecta.php");
			$UF = $_POST['UF'];
			$cidade = $_POST ['cidade'];
			$sql = "select * from tabela_x ";
			if((!$_POST['cidade']=='')or (!$_POST['UF']=='')){
				$sql.= "where ";
			}
			if(!($_POST['cidade']=='')){
				$cidade=$_POST['cidade'];
				$sql.="cidade= '$cidade' ";
			}
			if(!($_POST['UF']=='')){
				$UF=$_POST['UF'];
				$sql.="UF= '$UF' ";
			}
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