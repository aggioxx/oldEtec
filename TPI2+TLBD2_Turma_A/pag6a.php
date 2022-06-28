<!DOCTYPE html>
<html>
	<head>
		<title>Pag6</title>
		<style type="text/css">
			div {
				margin: 10px;
			}
		</style>
<script type="text/javascript">
			function cidades(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState === 4 && this.status === 200){
					document.getElementById("cidadeSlct").innerHTML = "";
				}
			}
			xhttp.open("GET", "pag6b.php?UF=" + document.getElementById("UF").value);
			xhttp.send();			
		}

		function envia(){
			var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status == 200){
						document.getElementById("result").innerHTML = xhttp.responseText;
					}
				};

				xhttp.open("GET", "pag6c.php?UF=" + document.getElementById("UF").value + "&cidade=" + document.getElementById("cidade").value);
				xhttp.send()
		}
	</script>
		<?php 
			require("conecta.php");
		 ?>
	</head>
	<body>
		<form name ="frm1" method="post" action="pag6c.php">
			<div>UF: <select id="UF" name="UF" onchange="addCidade()">
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
			<div id="cidade" name="cidade">
		
			</div>
			<div> <input type='button' id='enviar' name='enviar' value="envia" onclick='envia()'></div>
			<div id="result">
				
			</div>
	</body>
</html>