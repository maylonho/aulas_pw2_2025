<a href="ex01.php">Exercício 01</a><br/>
<a href="ex02.php">Exercício 02</a><br/>

<h1>Aula 03 - Estrutura Condicional</h1>

<?php
$nome = "André Silva";
$idade = 18;

// if(expressao){
//     o codigo que sera executado caso a expressão for verdadeira
// }
// else{
// o codigo que sera executado caso a   expressão for falsa
// }
// Se a expressao for verdadeira, é executado o código dentro das chaves, caso contrário, é executado o bloco else.


// OPERADORES LÓGICOS
// operador (E) -- && ou 'and'
// Retorna verdadeiro se todas as proposições (expressões) forem verdadeiras

// operador (OU) || ou 'or'
// Retorna verdadeiro se apenas uma das proposições (expressões) forem verdadeiras

if ($idade < 16){
    echo $nome . " você ainda não pode votar";
}
elseif ($idade >= 16 and $idade < 18){
    echo $nome . " você pode votar, mas é opcional!";
}
else {
    echo $nome . " você deve votar!";
}

?>