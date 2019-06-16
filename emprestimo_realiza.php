<?php


	include_once("conexao.php");

 
	$codigo_livro = $_POST['codigo_livro'];
	$codigo_associado = $_POST['codigo_associado'];
	$idade = $_POST['idade'];
	$prazo = $_POST['prazo'];
	$endereco = $_POST['endereco'];
	$observacao = $_POST['observacao'];

				codigo_emprestimo integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
				codigo_livro varchar(20),
				codigo_associado varchar(20),
				retirada date,
				prazo integer,
				devolucao date,
				status integer,
				FOREIGN KEY (codigo_livro) REFERENCES livro(codigo),
				FOREIGN KEY (codigo_associado) REFERENCES associado(codigo),
				
	$sql = "INSERT INTO associado (codigo, nome, idade, prazo, endereco, observacao) VALUES ('$codigo','$nome','$idade','$prazo','$endereco','$observacao')";
	$salvar = mysqli_query($conexao, $sql);

	echo "<h2>Associado incluído com sucesso!</h2>"; 
 
  
	mysqli_close($conexao);


?>

				