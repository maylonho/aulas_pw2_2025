<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR LIVRO</title>
</head>
<body>
    <h1>EDITAR LIVRO</h1>

    <form action="proc_editar.php" method="get">
        <input name="id_livro" placeholder="ID" type="number" value="<?= $_GET['id'] ?>">
        <input name="titulo_livro" placeholder="Titulo" type="text">
        <input name="descricao_livro" placeholder="Descrição" type="text">

        <button type="submit">SALVAR</button>
    </form>
</body>
</html>