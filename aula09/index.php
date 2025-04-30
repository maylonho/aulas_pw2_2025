<h1>Aula 09 - Constantes e Operador ternário</h1>

<?php
include 'constantes.php';

$nome = "Maylon";
$idade = 16;

// if($idade >= 18){
//     $condição = "Cidadão maior de idade";
// }
// else {
//     $condição = "Cidadão menor de idade";
// }

// CONDICAO ? VALOR SE VERDADEIRO : VALOR SE FALSO
$condição = (IDADE >= 18) ? "Maior de idade" : "Menor de idade";


echo $condição;
echo "<br>";
echo NOME_ESCOLA;
?>