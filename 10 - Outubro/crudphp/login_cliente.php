<?php
	include ('conexao.php');
	include ('banco-cliente.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="post">
		Usuário: <input type="text" name="user"><br>
		Senha: <input type="text" name="senha"><br>
		<input type="submit" value="Logar">
	</form>

	<?php
	
		if ($_POST){
			$user = $_POST['user'];
			$pass = $_POST['senha'];

			if (login($conexao, $user, $pass)) {
				session_start();
				$_SESSION['nome'] = $user;
				$_SESSION['log'] = 'ativo';
				header("Location: menu.php");
				die();
			}else(
				echo "Usuário ou senha incorreto";
			)
		}
	?>

</body>
</html>