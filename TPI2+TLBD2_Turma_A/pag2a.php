<!DOCTYPE html>
<html>
	<head>
		<title>Ex2</title>
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
		<form name ="frm1" method="post" action="pag2b.php">
			<div>UF:
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
			<div>Cidade: <input type="text" name="cidade" value=""></div>
			<div><input type="submit" value="enviar"></div>
		</form>
	</body>
</html>