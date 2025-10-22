<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar Produtos</h1>
    <form action="proc_editar.php" method="get">
        <input type="number" name="id_produto" placeholder="ID" value="<?= $_GET['id'] ?>">
        
        <input type="text" name="nome_produto" placeholder="Nome">
        <input type="text" name="descricao_produto" placeholder="Descrição">

        <button type="submit">SALVAR</button>
    </form>
</body>
</html>