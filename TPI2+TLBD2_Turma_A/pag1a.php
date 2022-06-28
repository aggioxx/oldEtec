<!DOCTYPE html>
<html>
	<head>
		<title>Página 1</title>
		<style type="text/css">
			div {
				margin: 10px;
			}
		</style>
	</head>
	<body>
		<?php
		require("conecta.php")
		?>
		<form name="form1" action="pag1b.php" method="post">
	 		<div>Cidade: <input type="text" name="cidade" id="cidade"><br></div>
	 		<div>UF: <select name="UF" id="UF">

	 			<option value="AC">AC</option>
	 			<option value="AL">AL</option>
	 			<option value="AP">AP</option>
	 			<option value="AM">AM</option>
	 			<option value="BA">BA</option>
	 			<option value="CE">CE</option>
	 			<option value="DF">DF</option>
	 			<option value="ES">ES</option>
	 			<option value="GO">GO</option>
	 			<option value="MA">MA</option>
	 			<option value="MT">MT</option>
	 			<option value="MS">MS</option>
	 			<option value="MG">MG</option>
	 			<option value="PA">PA</option>
	 			<option value="PB">PB</option>
	 			<option value="PR">PR</option>
	 			<option value="PE">PE</option>
	 			<option value="PI">PI</option>
	 			<option value="RJ">RJ</option>
	 			<option value="RN">RN</option>
	 			<option value="RS">RS</option>
	 			<option value="RO">RO</option>
	 			<option value="RR">RR</option>
	 			<option value="SC">SC</option>
	 			<option value="SP">SP</option>
	 			<option value="SE">SE</option>
	 			<option value="TO ">TO</option>
	 		</select></div>
	 		<div><input type="submit" value="envia"></div>
		</form>
	</body>
</html>