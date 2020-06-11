
<?php
session_start();

if ($_SESSION['log'] != "ativo"){
	session_destroy();
	header("Location: login_cliente.php");
}else{
	echo $_SESSION['user'] .  " , bem-vindo ao sistema";
	echo "<a href='logout.php'>Sair</a>";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>
<h1>Bem vindo ao sistema</h1>

<li><a href="#">cadastro</a>
	<ul><li><a href="cadastro.php">Cliente</a></li></ul>

</body>
</html>