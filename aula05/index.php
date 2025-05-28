<h1>Aula 05 - Funções</h1>
<?php
date_default_timezone_set('America/Sao_Paulo');

<<<<<<< HEAD
//Em programação, uma função é um bloco de código reutilizável que executa uma tarefa específica. Ela pode receber parâmetros como entrada, realizar operações e retornar um valor. O uso de funções facilita a organização, a reutilização de código e a manutenção do programa.

=======
>>>>>>> 66807f7 (Primeiro comit)
//Criando a função saudacao
function saudacao(){
    $hora = date('H');

    if ($hora >= 0 && $hora <=5){
        $saudacao = "Boa madrugada!";
    }
    else if($hora >= 6 && $hora <= 12){
        $saudacao = "Bom dia!";
    }
    else if($hora >= 13 && $hora <= 18){
        $saudacao = "Boa tarde!";
    }
    else{
        $saudacao = "Boa noite!";
    }

    return $saudacao;
}

//Chamando a função saudacao
echo saudacao();
echo "<br>A hora atual é: " . date('H');

<<<<<<< HEAD
// Fução que retorna a soma de dois numeros, passados por parametro
function soma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

//Chamando a função soma
echo soma(16, 8);
=======
//Fução que retorna a soma de dois numeros, passados por parametro
// function soma($num1, $num2){
//     $resultado = $num1 + $num2;
//     return $resultado;
// }

// //Chamando a função soma
// echo soma(16, 8);
>>>>>>> 66807f7 (Primeiro comit)


?>