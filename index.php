<?php 
	include('funciones.php');
				if (!empty($_POST)) {
						$pval1 = $_POST['porcentaje'];
						$pval2 = $_POST['valor'];
						$valor2 = $_POST['valorP1'];
						$valor3 = $_POST['valorV1'];
						$valorResta1 = $_POST['resta1'];
						$valorResta2 = $_POST['resta2'];
					}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
	<nav>
		<P>Este es una pagina de porcentaje</P>
	</nav>
	<div class="container">
		<div class="form1">
		<form action="index.php" method="POST">
			<H1 class="titulo"> Calculadora de porcentaje de valor</H1>
			<label for="">INGRESE P%</label>
			<input type="text" name="porcentaje">
			<label for="">Ingrese el valor</label>
			<input type="text" name="valor">
			<input type="submit" name="" value="Calcular">
			<p><?php
				if (!empty($_POST)) {
						$valor = pValor($pval1,$pval2); 
						echo "el $pval1 % de $pval2 es $valor";
					}
			  ?></p>
			</form>	
		</div>

		<div class="form2">
		<form action="index.php" method="POST">
			<H1 class="titulo"> Calculadora de porcentaje suma valor</H1>
			<label for="">INGRESE P%</label>
			<input type="text" name="valorP1">
			<label for="">Ingrese el valor</label>
			<input type="text" name="valorV1">
			<input type="submit" name="" value="Calcular">
			<p><?php
				if (!empty($_POST)) {
						$valor4 = pValor($valor2,$valor3);
						$totalP = $valor3 + $valor4;
						echo "la suma $valor2% a $valor3 es $valor4 total sumado $totalP";
					}
			  ?></p>
		</form>	
		</div>

	<div class="form3">
		<form action="index.php" method="POST">
			<H1 class="titulo"> Calculadora de porcentaje resta valor</H1>
			<label for="">INGRESE P%</label>
			<input type="text" name="resta1">
			<label for="">Ingrese el valor</label>
			<input type="text" name="resta2">
			<input type="submit" name="" value="Calcular">
			<p><?php
				if (!empty($_POST)) {
						$valorResta = restaP($valorResta1,$valorResta2);
						$totalPresta= $valorResta2 - $valorResta;
						echo "la resta $valorResta1 % a $valorResta2 es $valorResta total restado $totalPresta";
					}
			  ?></p>
		</form>	
		</div>
	</div>
	<footer>
		<p>aqui footer</p>
	</footer>
</body>
</html>