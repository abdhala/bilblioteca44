<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$sql = "DELETE FROM livro WHERE codigo=$codigo";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Livro incluído com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				