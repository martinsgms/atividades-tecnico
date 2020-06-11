<?php

	include ('conexao.php');
	include ('banco-cliente.php');

	$nome    = $_POST['nome'];
	$end     = $_POST['endereco'];
	$tel     = $_POST['telefone'];
	$email   = $_POST['email'];
	$idade   = $_POST['idade'];
	$salario = $_POST['salario'];

	if (insert($conexao, $nome, $end, $tel, $email, $idade, $salario)) {
		echo "Cliente inserido com sucesso";
	}else{
		$msg = mysqli_errno($conexao);
		echo $msg;
	}