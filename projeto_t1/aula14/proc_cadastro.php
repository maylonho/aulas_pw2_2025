<?php
include 'conexao.php';

$id = $_GET['id_livro'];
$titulo = $_GET['titulo_livro'];
$descricao = $_GET['descricao_livro'];

$sql = "INSERT INTO livros 
(id_livro, titulo_livro, descricao_livro)
VALUES 
('$id', '$titulo', '$descricao')";

$result = $conexao->query($sql);

header('Location: list_livro.php');

?>