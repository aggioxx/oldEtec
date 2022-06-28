<!DOCTYPE html>
<html>
<head>
	<title>pag5c</title>
</head>
<body>
		<?php
		require("conecta.php");
		$sql = "select * from tabela_x ";
		if ((!$_POST['cidade']=='') or (!$_POST['UF']=='')){
			$sql.=" where ";
		}
		if ((!$_POST['cidade']=='')) {
			$cidade=$_POST['cidade'];
			$sql.=" cidade='$cidade' ";
			if (!($_POST['UF']=='')){
				$sql.=" and ";
			}
		}
		if ((!$_POST['UF']=='')) {
			$UF=$_POST['UF'];
			$sql.=" UF='$UF'";
		}
		$sql .= "GROUP BY cidade";

		$result = mysqli_query($conn, $sql); 
		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr>";
			echo "<th>cidade</th>";
			echo "<th>UF</th>";
			echo "</tr>";

			while($row = mysqli_fetch_assoc($result)) {				
				echo "<tr>";
				echo "<td>" . $row['cidade'] . "</td>";
				echo "<td>" . $row['UF'] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "Nenhum resultado encontrado";
		}
		echo "</table>";
	?>
</body>
</html>