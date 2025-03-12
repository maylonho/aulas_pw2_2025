<?php
echo "Laço de repetição - WHILE <br>";

$contador = 1;

while($contador <= 100){
    if($contador % 2 == 0){
        echo "Iteração numero $contador <br>";
    }
    $contador++;
}

?>