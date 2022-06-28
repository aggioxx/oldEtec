	<?php
		require_once("conecta.php");
		$UF = $_GET['UF'];

		$sql = "SELECT DISTINCT a.cidade FROM tabela_x a WHERE UF = '" . $UF . "';";
		$dataset = mysqli_query($conn, $sql);

		echo "<div>Cidade: <select name='cidade' id='cidade'>";
		echo "<option value=''> </option>";

		if(mysqli_num_rows($dataset) > 0) {
			while ($row = mysqli_fetch_assoc($dataset)) {
				$cidade = $row['cidade'];
				echo "<option value='" . $cidade . "'>" . $cidade . "</option>";
 			}
		} 	

		echo "</select></div>";
		echo "<button type='submit' id='enviar'>Enviar</button>";
		mysqli_close($conn);
	?>	
	
