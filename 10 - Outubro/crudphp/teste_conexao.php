<?php 

include('conexao.php');

	if(!$conexao) {
		echo "Não foi possível conectar ao banco";
		exit;
	}else{
		echo "Conexão realizada com sucesso";
	}