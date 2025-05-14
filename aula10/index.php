<?php
$chave1 = "nome";
$chave2 = "sobrenome";
$chave3 = "funcao";

$valor1 = "João";
$valor2 = "Silva";
$valor3 = "Operador de Caixa";
?>

<h1>URL e Query Strings</h1>

<h3>Acessando dados por link utilizando Query Strings</h3>

<a href="usuario.php?<?= $chave1 ?>=<?= $valor1 ?>&<?= $chave2?>=<?= $valor2?>&<?= $chave3?>=<?= $valor3?>">Usuario: Maylon</a>