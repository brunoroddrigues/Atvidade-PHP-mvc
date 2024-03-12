<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Lista de cursos</title>
</head>
<body>
    <h1>Cursos</h1>
    <table border ="1">
        <tr>
            <th>Código</th>
            <th>Curso</th>
            <th>Ações</th>
        </tr>
        <?php
            foreach($retorno as $dado)
            {
                echo "<tr>
                      <td>{$dado->idcurso}</td>
                      <td>{$dado->nome}</td>
                      <td><a href='index.php?controle=cursoController&metodo=alterar&idcurso={$dado->idcurso}'>Alterar</a>&nbsp;&nbsp;
                      <a href='index.php?controle=cursoController&metodo=excluir&idcurso={$dado->idcurso}'>Excluir</a></td>
                      </tr>";
            }
        ?>
    </table>
    <br>
    <a href="index.php?controle=cursoController&metodo=inserir">Novo Curso</a>
</body>
</html>