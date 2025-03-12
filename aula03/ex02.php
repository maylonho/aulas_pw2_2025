<!--
Construa um programa que receba um número inteiro positivo informado pelo usuário. Caso ele seja par, o programa deve calcular o seu quadrado. Mas, se ele for ímpar, deve ser calculado o seu cubo. Ao fim, o programa deve mostrar o valor calculado e dizer se o número é impar ou par.
S
-->

<?php
$numero = 12;

if ($numero % 2 == 0){
    echo "O numero é par, e o seu quadrado é: ". $numero * $numero;
}
else{
    echo "O numero é impar, e o seu cubo é: ". $numero * $numero * $numero;
}
?>