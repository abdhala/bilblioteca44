<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Gerenciar Livros - B44</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="container">
		<nav><center>
			<img src="img/logo.png" style="width: 284px;">
			
			<ul class="menu">			

			<a href="pagina_inicial.php" style="text-decoration: none;"><li>Página Inicial</li></a>			
			<a href="associados.php" style="text-decoration: none;"><li>Gerenciar Associados</li></a>
			<a href="livros.php" style="text-decoration: none;"><li>Gerenciar Livros</li></a>
			<a href="emprestimo.php" style="text-decoration: none;"><li>Realizar Emprestimo</li></a>
			<a href="devolucao.php" style="text-decoration: none;"><li>Realizar Devolução</li></a>
			<a href="pesquisar.php" style="text-decoration: none;"><li>Pesquisar</li></a>	
			<a href="sair.php" style="text-decoration: none;"><li>Sair</li></a>
				 									
		</ul>
		<br>
		</nav></center>
		<section>
			<hr><br>
			<center><h1>Realizar Emprestimo</h1><br></center>
			<hr><br>


			<form method="POST" action="livros_cadastra.php">
				<b>
				Código do Livro <input style="width: 150px;" type="text" name="codigo_livro" class="campo" maxlength="20"><br><br>	
				Código do Associado <input style="width: 150px;" type="text" name="codigo_associado" class="campo" maxlength="150" ><br><br>	
				Observações <input type="text" name="observacao" class="campo" maxlength="150" ><br><br><br>	
				</b>
				<center>				
					<input type="submit" value="Emprestar" class="btn">
					<input type="reset" value="Limpar" class="btn"> 

				</center>
				<br><br><br>
			</form>

			
		</section>
	</div>

</body>
</html>