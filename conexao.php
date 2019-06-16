<?php
	
	$hostname = "localhost";
	$user = "root";
	$password ="";
	$database = "biblioteca44";
	$conexao = mysqli_connect($hostname,$user, $password, $database);

	if (!$conexao) {
		echo "Erro ao conectar no banco de dados!";
	}


?>