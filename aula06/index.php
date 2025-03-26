<h1>Aula 06 - Vetores ou Arrays</h1>

<?php
$variavel = "Valor da variavel";

$frutas = ["maça", "banana", "caju"];

for ($i=0; $i < count($frutas); $i++) { 
    echo "<br>";
    echo $frutas[$i];
    echo "<br>";
}


echo $frutas[0];
echo "<br>";
echo $frutas[2];

$alunos = [
    5 => "MARCOS VINÍCIUS",
    8 => "NATAN VIEIRA SILVA",
    2 => "JULIA SOUZA"
];

//mostrando as chaves
foreach($alunos as $chave => $valor){
    echo $chave;
    echo "<br>";
} 

//mostrando os valores
//foreach(vetor as lista)
//percorra(vetor as lista)
foreach($alunos as $lista){
    echo $lista;
    echo "<br>";
} 

//mostrando os valores
//foreach(vetor as chave => valor)
foreach($alunos as $chave => $valor){
    echo $valor;
    echo "<br>";
} 

// Convertendo array associativo em indexado
$valores = array_values($alunos);

for ($i=0; $i < count($valores); $i++) { 
    echo "<br>";
    echo $valores[$i];
}

// echo "<br>";
// echo $alunos[8];

$dias = [
    "seg" => "Segunda-Feira",
    "ter" => "Terça-Feira",
    "qua" => "Quarta-Feira",
    "qui" => "Quinta-Feira",
    "sex" => "Sexta-Feira",
    "sab" => "Sábado",
    "dom" => "Domingo"
];

echo "<br>";
echo $dias["sab"];

?>