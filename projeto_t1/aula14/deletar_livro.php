<?php
include "conexao.php";

$id = $_GET['id'];

$query = "DELETE FROM livros WHERE id_livro='$id'";

mysqli_query($conexao, $query);

header('Location: list_livro.php');