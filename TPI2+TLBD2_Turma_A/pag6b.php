<?php
	require_once("conecta.php");
	$estado = $_GET['UF'];
	$sql = "SELECT * FROM `tabela_x` WHERE cidade LIKE '%" . $cidade . "%' AND UF LIKE '%" . $UF . "%' GROUP BY cidade ORDER BY cidade";
	
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