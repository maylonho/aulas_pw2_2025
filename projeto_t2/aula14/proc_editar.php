<?php
include 'conexao.php';

$id = $_GET['id_produto'];
$nome = $_GET['nome_produto'];
$descricao = $_GET['descricao_produto'];

$sql = "UPDATE produtos SET nome_produto='$nome', descricao_produto='$descricao' WHERE id_produto='$id'";

mysqli_query($conexao, $sql);

header('Location: list_produto.php');