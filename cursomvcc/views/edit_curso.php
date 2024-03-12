<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Alterar curso</title>
	</head>
	<body>
		<h1>Curso</h1>
		<form action="#" method="post">
			<input type="hidden" name="idcurso" value="<?php echo $retorno[0]->idcurso;?>">
			<label for="nome">Curso</label>
			<input type="text" name="nome" id="nome" value="<?php echo $retorno[0]->nome;?>">
			<div><?php echo $msg;?></div>
			<br><br>
			<input type="submit" value="Alterar">
		</form>
	</body>
</html>