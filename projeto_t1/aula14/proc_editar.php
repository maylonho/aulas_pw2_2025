<?php

include 'conexao.php';

$id = $_GET['id_livro'];
$titulo = $_GET['titulo_livro'];
$descricao = $_GET['descricao_livro'];

$sql = "UPDATE livros SET titulo_livro='$titulo', descricao_livro='$descricao' WHERE id_livro='$id'";

mysqli_query($conexao, $sql);

header('Location: list_livro.php');