<?php
include 'conexao.php';

$sql = "SELECT * FROM livros";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <h1>Lista de Livros</h1>

    <table width="500" border="1px">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>
        <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                        <td>". $linha['id_livro'] .  "</td>
                        <td>". $linha['titulo_livro'] ."</td>
                        <td>". $linha['descricao_livro'] ."</td>
                        <td><a href='deletar_livro.php?id=". $linha['id_livro'] . "'> Excluir </a></td>
                        <td><a href='form_editar.php?id=". $linha['id_livro'] . "'> Editar </a></td>
                      </tr>
                ";
            }
        ?>
    </table>
</body>
</html>