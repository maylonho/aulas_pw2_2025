<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

// if($op == "+"){
//     echo "<br/>O resultado da soma é: " . ($n1 + $n2);
// }
// else if($op == "-"){
//     echo "<br/>O resultado da subtração é: " . ($n1 - $n2);
// }
// else if($op == "*"){
//     echo "<br/>O resultado da multiplicação é: " . ($n1 * $n2);
// }
// else if($op == "/"){
//     echo "<br/>O resultado da divisão é: " . ($n1 / $n2);
// }
// else {
//     echo "Operação invalida!";
// }

if(isset($_GET['soma'])){
    echo "<br/>O resultado da soma é: " . ($n1 + $n2);
}
else if(isset($_GET['subt'])){
    echo "<br/>O resultado da subtração é: " . ($n1 - $n2);
}
else if(isset($_GET['mult'])){
    echo "<br/>O resultado da multiplicação é: " . ($n1 * $n2);
}
else if(isset($_GET['divi'])){
    echo "<br/>O resultado da divisão é: " . ($n1 / $n2);
}
else {
    echo "Operação invalida!";
}




?>