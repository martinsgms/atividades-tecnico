<?php
	include ('conexao.php');
	include ('banco-cliente.php');

	$cod_cliente = $_GET['cod_cliente'];
	$cliente = busca($conexao, $cod_cliente);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Alterar</title>
</head>
<body>

	<h1>Alterar Cliente</h1>


	<form method="post" action="verifica_update.php">
		<pre>
			Cod:<input type="text" name="cod" value="<?php echo $cliente['cod_cliente']; ?>"><br>

			Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"><br>

			Endereco: <input type="text" name="endereco" value="<?php echo $cliente['endereco']; ?>"><br>

			Telefone: <input type="text" name="telefone" value="<?php echo $cliente['telefone']; ?>"><br>

			Email: <input type="text" name="email" value="<?php echo $cliente['email']; ?>"><br>

			Idade: <input type="text" name="idade" value="<?php echo $cliente['idade']; ?>"><br>

			Salario: <input type="text" name="salario" value="<?php echo $cliente['salario']; ?>"><br>

			<input type="submit" name="btn" value="alterar">

			
		</pre>
	</form>
</body>
</html>