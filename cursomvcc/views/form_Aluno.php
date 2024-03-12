<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Aluno</title>
</head>
<body>
    <h1>Aluno</h1>
    <form action="#" method="post"> 
        <label for="nome">Aluno</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">
        <label for="cpf">Cpf</label>
        <input type="text" name="cpf" id="cpf">
        <div><?php echo $msg[0];?></div>
        <br><br>
        <input type="submit" value="Cadastrar">
</body>
</html>