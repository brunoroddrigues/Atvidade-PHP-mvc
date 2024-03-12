<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Lista de cursos</title>
</head>
<body>
    <h1>Alunos</h1>
    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($retorno as $dado)
            {
                echo "<tr>
                      <td>{$dado->nome}</td>
                      <td>{$dado->cpf}</td>
                      <td>{$dado->email}</td>
                      <td>{$dado->telefone}</td>
                      <td><a href='index.php?controle=alunoController&metodo=alterar&idaluno={$dado->idaluno}'>Alterar</a>&nbsp;&nbsp;
                      <a href='index.php?controle=alunoController&metodo=excluir&idaluno={$dado->idaluno}'>Excluir</a></td>
                      </tr>";
            }
        ?>
    </table>
    <br>
    <a href="index.php?controle=alunoController&metodo=inserir">Novo Aluno</a>
</body>
</html>