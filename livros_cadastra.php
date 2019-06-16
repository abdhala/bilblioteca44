<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$editora = $_POST['editora'];
	$genero = $_POST['genero'];
	$local = $_POST['local'];
	$observacao = $_POST['observacao'];

	$sql = "INSERT INTO livro (codigo, titulo, autor, editora, genero, local, observacao) VALUES ('$codigo','$titulo','$autor','$editora','$genero','$local','$observacao')";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Livro incluído com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				