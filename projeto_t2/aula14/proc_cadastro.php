<?php
include 'conexao.php';

$id = $_GET['id_produto'];
$nome = $_GET['nome_produto'];
$descricao = $_GET['descricao_produto'];

$sql = "INSERT INTO produtos (id_produto, nome_produto, descricao_produto) VALUES ('$id', '$nome', '$descricao')";

$conexao->query($sql);

header('Location: list_produto.php');
?>