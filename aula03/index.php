<a href="ex01.php">Exercício 01</a><br/>
<a href="ex02.php">Exercício 02</a><br/>

<h1>Aula 03 - Estrutura Condicional</h1>

<?php
$nome = "André Silva";
$idade = 18;

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