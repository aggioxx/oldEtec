<?php
		require("conecta.php");
		$UF = $_GET['UF'];

		$sql = "SELECT DISTINCT cidade FROM tabela_x WHERE UF = '" . $UF . "';";
		$dataset = mysqli_query($conn, $sql);

		if(mysqli_num_rows($dataset) > 0) {
			while ($row = mysqli_fetch_assoc($dataset)) {
				$cidade = $row['cidade'];
				$cidades[] = $cidade;
 			}
		} 	
		$json = json_encode($cidades, JSON_UNESCAPED_UNICODE);
		echo $json;
		mysqli_close($conn);
	?>	