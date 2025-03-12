//Crie uma função que calcule o volume de um recipiente, a funcao devera receber 3 parametros.

<?php
function calculaVolume($m1, $m2, $m3){
    $volume = $m1 * $m2 * $m3;
    return $volume;
}

echo "O volume do recipente de 2 x 5 x 3 é <br>";
echo calculaVolume(2, 5, 3);

?>