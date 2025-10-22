<?php
include 'conexao.php';

$sql = "SELECT * FROM produtos";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table width='500' border='1px'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>

        <?php
            while($linha = mysqli_fetch_assoc($resultado)){
                echo "<tr>
                        <td>". $linha['id_produto'] ."</td>
                        <td>". $linha['nome_produto'] ."</td>
                        <td>". $linha['descricao_produto'] ."</td>
                        <td><a href='form_editar.php?id=".$linha['id_produto']."'>Editar</a></td>
                        <td><a href='deletar_produto.php?id=".$linha['id_produto']."'>Excluir</a></td>
                      </tr>
                ";
            }
        ?>
    </table>
</body>
</html>