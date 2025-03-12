<?php
$joao = 1.75;
$amanda = 1.95;
$bruno = 1.45;

if ($joao > $amanda && $joao > $bruno){
    $maior = $joao;
    if ($amanda > $bruno){
        $meio = $amanda;
        $menor = $bruno;
    }
    else{
        $meio = $bruno;
        $menor = $amanda;
    }
}
elseif ($amanda > $joao && $amanda > $bruno){
    $maior = $amanda;
    if ($joao > $bruno){
        $meio = $joao;
        $menor = $bruno;
    }
    else {
        $meio = $bruno;
        $menor = $joao;
    }
}
else{
    $maior = $bruno;
    if ($amanda > $bruno){
        $meio = $amanda;
        $menor = $bruno;
    }
    else {
        $meio = $bruno;
        $menor = $amanda;
    }
}

echo "O mais alto é: " . $maior;
echo "<br>O do meio é: " . $meio;
echo "<br>O mais baixo é: " . $menor;

?>