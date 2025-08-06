<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO LIVRO</title>
</head>
<body>
    <h1>CADASTRO DE LIVROS</h1>

    <form action="proc_cadastro.php" method="get">
        <input name="id_livro" placeholder="ID" type="number">
        <input name="titulo_livro" placeholder="Titulo" type="text">
        <input name="descricao_livro" placeholder="Descrição" type="text">

        <button type="submit">CADASTRAR</button>
    </form>
</body>
</html>