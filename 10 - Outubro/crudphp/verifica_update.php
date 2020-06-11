<?php

	include ('conexao.php');
	include ('banco-cliente.php');

	$cod     = $_POST['cod'];
	$nome    = $_POST['nome'];
	$end     = $_POST['endereco'];
	$tel     = $_POST['telefone'];
	$email   = $_POST['email'];
	$idade   = $_POST['idade'];
	$salario = $_POST['salario'];

	if (update($conexao, $nome, $end, $tel, $email, $idade, $salario, $cod)) {
		echo "Cliente alterado com sucesso";
		header("Location: tabela_cliente.php");
	}else{
		$msg = mysqli_errno($conexao);
		echo $msg;
	}