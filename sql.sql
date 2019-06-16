DROP DATABASE biblioteca44;

CREATE DATABASE biblioteca44;


CREATE TABLE livro(
				codigo varchar(20) PRIMARY KEY,
				titulo varchar(150),
				autor varchar(150),				
				editora varchar(150),
				genero varchar(150),
				local varchar(150),
				observacao varchar(150)		
);

CREATE TABLE associado(
				codigo varchar(20) PRIMARY KEY,
				nome varchar(150),
				idade varchar(5),
				prazo varchar(5),
				endereco varchar(150),
				observacao varchar(150)
);

CREATE TABLE emprestimo(
				codigo_emprestimo integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
				codigo_livro varchar(20),
				codigo_associado varchar(20),
				retirada date,
				prazo integer,
				devolucao date,
				status integer,
				FOREIGN KEY (codigo_livro) REFERENCES livro(codigo),
				FOREIGN KEY (codigo_associado) REFERENCES associado(codigo),		
				
);


INSERT INTO usuario (nome, usuario, senha) VALUES ('Abdhala Haissan', 'abdhala', '123');

INSERT INTO livro (codigo, titulo, autor)

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES ('1', 'Abdhala Haissan', 'abdhala', '123');