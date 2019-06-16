<?php
session_start();
include_once("conexao.php");

		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];

		$result_usuario = "SELECT id, nome, login, senha FROM usuario WHERE login='$usuario' AND senha = '$senha'";

		echo "$senha";
		$resultado_usuario = mysqli_query($conexao, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			if(password_verify($senha, $row_usuario['senha'])){
				$_SESSION['id'] = $row_usuario['id'];
				$_SESSION['nome'] = $row_usuario['nome'];
				$_SESSION['login'] = $row_usuario['login'];
				header("Location: pagina_inicial.php");
?>