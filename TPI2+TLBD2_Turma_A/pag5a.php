<!DOCTYPE html>
<html>
<head>
	<title> Pag 5a</title>
	<style type="text/css">
			div {
				margin: 10px;
			}
		</style>
	<script type="text/javascript">
		function addCidade(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					document.getElementById("result").innerHTML = "";

					var select = document.createElement("select");
					select.name = "cidade";
					select.id = "cidade";
					document.getElementById("result").appendChild(select);
					let res = xhttp.responseText;
					let json = JSON.parse(res);
					let jsonS = json.toString();
					let addCidade = [];
					addCidade = jsonS.split(",");

					let apt = document.createElement("option");
					apt.value = "";
					apt.innerHTML = "Selecione";
					document.getElementById("cidade").appendChild(apt);

					addCidade.forEach(function(item) {
						let apt = document.createElement("option");
						apt.value = item;
						apt.innerHTML = item;
						document.getElementById("cidade").appendChild(apt);
					});
				}
			};
			xhttp.open("GET", "pag5b.php?UF=" + document.getElementById("UF").value);
			xhttp.send();			
		}
		</script>
</head>
<body>
	<?php
		require("conecta.php");
	?>
	<form name="frm1" method="POST" action="pag5c.php">
		<div>UF: <select name="UF" id="UF" onchange="addCidade()">
		<option value=""></option>
			<?php
				$sql = "select distinct(UF) from tabela_x order by UF";
				$dataset=mysqli_query($conn,$sql);
				if (!$dataset) {
					die("Erro no SQL");
				}
				if (mysqli_num_rows($dataset)==0) {
					die("Não existem registros de addCidade na tabela!");
				}
				while ( $linha=mysqli_fetch_assoc($dataset) ) {
					$UF=$linha['UF'];
					echo("<option value='$UF'>$UF</option>");
				}
				?>
		</select></div>
		Cidade:
		<div id="result"></div>
		<div><button type='submit' id='enviar'>Enviar</button></div>
		</form>
</body>
</html>