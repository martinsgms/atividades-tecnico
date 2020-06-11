<?php

	include ('conexao.php');
	include ('banco-cliente.php');

	$id = $_GET['cod_cliente'];

	if(delete($conexao, $id)){
		header("Location: tabela_cliente.php");
		die();
	}