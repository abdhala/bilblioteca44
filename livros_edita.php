<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
	$editora = $_POST['editora'];
	$genero = $_POST['genero'];
	$local = $_POST['local'];
	$observacao = $_POST['observacao'];

	$sql = "UPDATE livro SET titulo ='$titulo', autor ='$autor', editora ='$editora', genero ='$genero', local ='$local', observacao='$observacao' where codigo = '$codigo'";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Livro Alterado com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				