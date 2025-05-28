<h1>Aula 04 - Estruturas de repetição</h1>
<a href="ex01.php">EX01<br/></a>
<a href="ex02.php">EX02<br/></a>
<a href="ex03.php">EX03<br/></a>
<?php
echo "Laço de repetição - WHILE <br>";

$contador = 0;

while($contador <= 10){
    echo "Iteração numero $contador <br>";
    $contador++;
}

<<<<<<< HEAD
echo "Laço de repetição - FOR <br>";

//for(estado inicial; estado final; incremento)
for ($contador=0; $contador < 10; $contador++) { 
    echo "Iteração numero $contador <br>";
}

// Laço while:

//     Ele executa o bloco de código enquanto a condição for verdadeira.
    
//     No exemplo, a variável $contador inicia com um valor e é incrementada a cada iteração até que seja maior que 10.
    
//     Laço for:
    
//     Ele é usado quando sabemos quantas vezes queremos repetir um bloco de código.
    
//     No exemplo, a variável $contador começa em 0 e é incrementada até atingir 9, exibindo cada iteração.

=======
>>>>>>> 66807f7 (Primeiro comit)
?>