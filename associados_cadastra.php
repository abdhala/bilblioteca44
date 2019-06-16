<?php


	include_once("conexao.php");

 
	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$prazo = $_POST['prazo'];
	$endereco = $_POST['endereco'];
	$observacao = $_POST['observacao'];

	$sql = "INSERT INTO associado (codigo, nome, idade, prazo, endereco, observacao) VALUES ('$codigo','$nome','$idade','$prazo','$endereco','$observacao')";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Associado incluído com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				