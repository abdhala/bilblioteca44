<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$sql = "DELETE FROM associado WHERE codigo=$codigo";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Associado incluído com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				