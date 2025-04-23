<h1>Questão 7</h1>

<?php
    function calcularImc($peso, $altura){
        $imc =  $peso / ($altura * $altura);
        return $imc;
    }

    $resultado = calcularImc(90, 2);

    if($resultado < 18.5){
        echo "Abaixo do peso";
    }
    else if ($resultado >= 18.5 and $resultado < 25){
        echo "Peso normal";
    }
    else if($resultado >= 25 and $resultado < 30){
        echo "Sobrepeso";
    }
    else {
        echo "Obesidade";
    }
?>