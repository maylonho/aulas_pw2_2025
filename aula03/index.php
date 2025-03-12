<a href="ex01.php">Exercício 01</a>
<a href="ex02.php">Exercício 02</a>

<hr/>

<?php
$nome = "João da Silva";
$idade = 18;

// == - verifica a igualdade de dados
// === - verifica igualdade exata
// >=
// <=
// >
// <
// != - Diferente

if ($idade < 16){
    echo "Você ainda não pode votar";
}
elseif ($idade >= 16 && $idade < 18){
    echo "Você não é obrigado, mas já pode votar";
}
else {
    echo "Você já é obrigado a votar";
}

?>