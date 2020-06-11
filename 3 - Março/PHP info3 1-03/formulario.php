<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
body{
	background-color:#039;
	font-family:sans-serif;
}
form{
	border-radius:10px;
	background-color:#FFF;
	padding:10px;
}
</style>
</head>

<body>

<h1 style="color:#fff;">Cadastro de clientes</h1>
<hr>


<form name="form1" method="post" action="">

	<p><label for="nome">Nome:<br> </label><input type="text" name="nome" id="nome" placeholder="ex: João" required></p>
    <p><label for="tel">Tel:<br> </label><input type="text" name="tel" id="tel" placeholder="ex: 1234-1234" required></p>
    <p><label for="end">Endereço:<br> </label><input type="text" name="end" id="end" placeholder="ex: Av. XY" required></p>
    <p><label for="email">Email::<br> </label><input type="email" name="email" id="email" placeholder="ex: abc@ig.com" required></p>
    <p><input type="reset" value="Limpar">
    <input type="submit" value="Enviar"></p>
</form>

<?php



?>
</body>
</html>