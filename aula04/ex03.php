<?php
$valor = 1.99;
$contador = 1;

echo "<h1>Lojas Quase Dois - Tabela de preços</h1>";

while($contador <= 50){
    echo "<br> $contador - R$ " . ($valor * $contador);

    $contador++;
}

?>