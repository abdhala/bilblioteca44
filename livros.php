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
			<a href="devolução.php" style="text-decoration: none;"><li>Realizar Devolução</li></a>
			<a href="pesquisar.php" style="text-decoration: none;"><li>Pesquisar</li></a>	
			<a href="sair.php" style="text-decoration: none;"><li>Sair</li></a>
				 									
		</ul>
		<br>
		</nav></center>
		<section>
			<hr><br>
			<center><h1>Cadastro de Livros</h1><br></center>
			<hr><br>


			<form method="POST" action="livros_cadastra.php">
				<b>
				Código <input style="width: 150px;" type="text" name="codigo" class="campo" maxlength="20"><br><br>	
				Título <input type="text" name="titulo" class="campo" maxlength="150" ><br><br>	
				Autor <input type="text" name="autor" class="campo" maxlength="150" ><br><br>	
				Editora <input type="text" name="editora" class="campo" maxlength="150" ><br><br>	
				Gênero <input type="text" name="genero" class="campo" maxlength="150" ><br><br>							
				Local <input type="text" name="local" class="campo" maxlength="150" ><br><br>
				Observações <input type="text" name="observacao" class="campo" maxlength="150" ><br><br><br>	
				</b>
				<center>				
					<input type="submit" value="Salvar" class="btn">
					<input type="reset" value="Limpar" class="btn"> 

				</center>
				<br><br><hr><br>
			<center><h1>Editar Livros</h1><br></center>
			<hr><br>
			</form>

			<form method="POST" action="livros_edita.php">
				<b>
				Código 
				<input style="width: 70px;" type="text" name="codigo" class="campo" maxlength="20"  ><br><br>
				Título 
				<input type="text" name="titulo" class="campo" maxlength="150" ><br><br>	
				Autor
				<input type="text" name="autor" class="campo" maxlength="150" ><br><br>	
				Editora
				<input type="text" name="editora" class="campo" maxlength="150" ><br><br>	
				Gênero 
				<input type="text" name="genero" class="campo" maxlength="150" ><br><br>							
				Local 
				<input type="text" name="local" class="campo" maxlength="150" ><br><br>
				Observações
				<input type="text" name="observacao" class="campo" maxlength="150" ><br><br><br>	
				</b>
				<center>				
					<input type="submit" value="Alterar" class="btn">
					<input type="reset" value="Limpar" class="btn"> 
				</center>
			</form>


			<br><br><hr><br>
			<center><h1>Excluir Livros</h1><br></center>
			<hr><br>
			<form method="post" action="livros_exclui.php">
				<b>
				Código 
				<input style="width: 70px;" type="text" name="codigo" class="campo" maxlength="20"  ><br><br>					
				<center>				
					<input type="submit" value="Excluir" class="btn">
					<input type="reset" value="Limpar" class="btn"> 
				</center>


			</form>

		</section>
	</div>

</body>
</html>