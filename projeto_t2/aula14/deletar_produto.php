<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM produtos WHERE id_produto='$id'";

$conexao->query($sql);

header('Location: list_produto.php');