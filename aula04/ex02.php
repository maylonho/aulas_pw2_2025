<?php
$numero = 5;
$contador = 0;
echo "<h1>Tabuada do número $numero </h1>";

while($contador <= 10){
    echo "<br> $numero x $contador = " . ($numero * $contador);

    $contador++;
}

?>