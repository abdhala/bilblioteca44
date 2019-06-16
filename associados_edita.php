<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$prazo = $_POST['prazo'];
	$endereco = $_POST['endereco'];
	$observacao = $_POST['observacao'];

	$sql = "UPDATE associado SET nome ='$nome', idade ='$idade', prazo ='$prazo', endereco ='$endereco', observacao='$observacao' where codigo = '$codigo'";


	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Associado Alterado com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				