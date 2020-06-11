<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h1>Dados Pessoais</h1>
<hr>

<form name="form1" method="post" action="">
	<p>Nome:<input type="text" name="nome"></p>
    <p>Idade:<input type="number" name="idade"></p>
    <p><input type="submit" value="enviar"></p>
    
</form>

<?php
	$nome = "Gabriel";
	$idade = "16";
	
	echo  "meu nome é $nome e tenho $idade anos";
?>

</body>
</html>
