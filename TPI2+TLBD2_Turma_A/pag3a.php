<!DOCTYPE html>
<html>
	<head>
		<title>Ex3</title>
		<style type="text/css">
			div {
				margin: 10px;
			}
		</style>
		<?php 
			require("conecta.php");
		 ?>
	</head>
	<body>
		<form name ="frm1" method="post" action="pag3b.php">
			<div>Estado:
			<select name="UF">
				<option value=''></option>
				<?php
					$sql = "select distinct(UF) from tabela_x ";
					$dataset = mysqli_query($conn, $sql);
					if(!$dataset){
						die("Erro");
					}
					if (mysqli_num_rows($dataset)==0){
						die("Tabela sem registros");
					}
					while ($row=mysqli_fetch_assoc($dataset)) {
						$UF=$row['UF'];
						echo ("<option value='$UF'>$UF</option>");
					}
				?>
			</select></div>		
			<div>Cidade:
			<select name="cidade">
				<option value=''></option>
				<?php
					$sql = "select distinct(cidade) from tabela_x ";
					$dataset = mysqli_query($conn, $sql);
					if(!$dataset){
						die("Erro");
					}
					if (mysqli_num_rows($dataset)==0){
						die("Tabela sem registros");
					}
					while ($row=mysqli_fetch_assoc($dataset)) {
						$cidade=$row['cidade'];
						echo ("<option value='$cidade'>$cidade</option>");
					}
				?>
			</select></div>
			<div><input type="submit" value="envia"></div>	
	</body>
</html>