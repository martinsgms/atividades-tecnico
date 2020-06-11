<?php

function insert($conexao, $nome, $end, $tel, $email, $idade, $sal){
	
	$sql = "INSERT INTO cliente" 
	. "(nome, endereco, telefone, email, idade, salario)"
	. "VALUES ('$nome', '$end', '$tel', '$email', '$idade', '$sal')";

	return mysqli_query($conexao, $sql);
}

function update($conexao, $nome, $end, $tel, $email, $idade, $sal, $cod){
	$sql = "UPDATE cliente set nome = '$nome',"
	. "endereco = '$end',"
	. "telefone = '$tel',"
	. "email    = '$email',"
	. "idade    = '$idade',"
	. "salario  = '$sal'"
	. "where cod_cliente = '$cod'";

	return mysqli_query($conexao, $sql);
}

function delete($conexao, $cod){
	$sql = "DELETE FROM cliente WHERE cod_cliente = '$cod'";

	return mysqli_query($conexao, $sql);
}

function lista_clientes($conexao){
	$clientes = array();
	$resultado = mysqli_query($conexao, "select * from cliente");

	while ($cliente = mysqli_fetch_assoc($resultado)){
		array_push($clientes, $cliente);
	}

	return $clientes;
}

function busca($conexao, $cod){
	$sql = "SELECT * FROM cliente WHERE cod_cliente = '$cod'";
	$resultado = mysqli_query($conexao, $sql);

	return mysqli_fetch_assoc($resultado);
}

function login($conexao, $user, $senha){
	$sql "SELECT * FROM usuario WHERE user = '{$user}' and senha = '{$senha}' ";

	$resultado = mysqli_query($conexao, $sql);
	return mysqli_fetch_assoc($resultado);


}