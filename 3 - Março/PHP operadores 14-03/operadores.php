<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<title></title>
</head>

<body>
<h1>Operadores</h1>
<hr>

<form name="form1" method="post" action="">
	<p><label for="v1">Valor1:</label><input type="number" name="v1" id="v1"></p>
	<p><label for="v2">valor2:</label><input type="number" name="v2" id="v2"></p>
	<p><input type="submit" value="Calcular" id="button" name="button"</p>

</form>

	<?php
		$n1= $_POST['v1'];
		$n2 = $_POST['v2'];

		echo "Soma: ". ($n1 + $n2). "<br>";
		echo "Subtração: " . ($n1-$n2) . "<br>";
		echo "Multiplicação: ". ($n1 * $n2) . "<br>";
		echo "Divisão: ". ($n1 / $n2) . "<br>";
		
	?>
</body>

</html>