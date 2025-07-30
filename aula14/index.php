<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
</head>
<body>
    <h1>Cadastro de Produtos</h1>

    <form action="proc_cadastro.php" method="get">
        <input type="number" name="id_produto" placeholder="ID">
        <input type="number" name="nome_produto" placeholder="Nome">
        <input type="number" name="descricao_produto" placeholder="Descrição">

        <button type="submit">CADASTRAR</button>
    </form>
</body>
</html>