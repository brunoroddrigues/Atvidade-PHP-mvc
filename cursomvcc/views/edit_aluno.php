<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Alterar Aluno</title>
	</head>
	<body>
		<h1>Aluno</h1>
		<form action="#" method="post">
			<input type="hidden" name="idaluno" value="<?php echo $retorno[0]->idaluno;?>">
			<label for="nome">Aluno</label>
			<input type="text" name="nome" id="nome" value="<?php echo $retorno[0]->nome;?>">
			<label for="email">Email</label>
			<input type="text" name="email" id="email" value="<?php echo $retorno[0]->email;?>">
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" id="telefone" value="<?php echo $retorno[0]->telefone;?>">
			<label for="senha">Senha</label>
			<input type="text" name="senha" id="senha" value="<?php echo $retorno[0]->senha;?>">
			<label for="cpf">Cpf</label>
			<input type="text" name="cpf" id="cpf" value="<?php echo $retorno[0]->cpf;?>">
			<div><?php 
				foreach($msg as $mensagem) {
					echo $mensagem;
				}
			?></div>
			<br><br>
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>