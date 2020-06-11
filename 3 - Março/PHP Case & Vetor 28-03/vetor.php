<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="utf-8">
	<title>Vetor</title>

<style>

	*{font-family: sans-serif;}

	body{background-color: #8b0000;}

	div{
		background-color: #fff;
		border-radius: 10px;
		padding: 5px;
		margin-top: 20px;
		width: 220px;
		margin-left: 45%;
		margin-right: 30%;
		text-align: center;
	}

</style>

</head>

<body>

<div>
<h1>Data e hora</h1>
</div>

<div>
<?php

$semana = date("N"); 
$diasemana = array("Domingo","segunda","terca","Quarta");
echo $diasemana[$semana] .", ";

echo date("d") . " de ";
//echo date("O:H:i:s"); 

$mes = date("n")-1;
$nMes = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
echo $nMes[$mes] . " de "; 

echo date("Y");


?>
</div>

</body>
</html>