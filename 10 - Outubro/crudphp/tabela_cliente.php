<?php
	include ('conexao.php');
	include ('banco-cliente.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Clientes cadastrados</title>
</head>
<body>

	<h1>Clientes cadastrados</h1>
	<table border="1">

		<tr>
			<td>id</td>
			<td>nome</td>
			<td>endereco</td>
			<td>telefone</td>
			<td>email</td>
			<td>idade</td>
			<td>salario</td>
			<td>excluir</td>
			<td>alterar</td>
		</tr>

		<?php 
			$clientes = lista_clientes($conexao);
			foreach ($clientes as $cliente) {
		?>

		<tr>
			<td><?php echo $cliente['cod_cliente']; ?></td>
			<td><?php echo $cliente['nome']; ?></td>
			<td><?php echo $cliente['endereco']; ?></td>
			<td><?php echo $cliente['telefone']; ?></td>
			<td><?php echo $cliente['email']; ?></td>
			<td><?php echo $cliente['idade']; ?></td>
			<td><?php echo $cliente['salario']; ?></td>
			<td><a href="excluir_cliente.php?cod_cliente=<?php echo $cliente['cod_cliente']; ?>"> Excluir</a></td>
			<td><a href="alterar_cliente.php?cod_cliente=<?php echo $cliente['cod_cliente']; ?>"> Alterar</a></td>
		</tr>

		<?php } ?>

	</table>
</body>
</html>