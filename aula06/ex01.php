//Exercicio 01 - Crie um vetor para armazenar todos os meses do ano, e em seguida exiba na tela os meses: agosto e dezembro.

//Parte 2 - Exiba todos os elementos utilizando o laço for e o laço foreach

<?php
$meses = [
    'ja' => 'janeiro',
    'fe' => 'fevereiro',
    'ma' => 'março',
    'ab' => 'abril',
    'mi' => 'maio',
    'jn' => 'junho',
    'jl' => 'julho',
    'a' => 'agosto',
    's' => 'setembro',
    'o' => 'outubro',
    'n' => 'novembro',
    'd' => 'dezembro',
];
echo "<br>";

// $index_meses = array_values($meses);
// for ($i=0; $i < count($meses); $i++) { 
//     echo "<br>";
//     echo $index_meses[$i];
// }

foreach ($meses as $chave => $valor) {
    echo "<br>";
    echo $valor;
}

?>