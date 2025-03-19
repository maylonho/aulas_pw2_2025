<h1>Aula 06 - Vetores ou Arrays</h1>

<?php
// $variavel = "Valor da variavel";

// $vetor = ["valor 1", "valor 2", "valor 3"];

// for ($i=0; $i < count($vetor); $i++) { 
//     echo "<br>";
//     echo $vetor[$i];
// }


// echo $vetor[0];
// echo "<br>";
// echo $vetor[2];

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
foreach($alunos as $chave => $valor){
    echo $valor;
    echo "<br>";
} 

//Convertendo array associativo em indexado
// $valores = array_values($alunos);

// for ($i=0; $i < count($valores); $i++) { 
//     echo "<br>";
//     echo $valores[$i];
// }

// echo "<br>";
// echo $alunos[8];

// $dias = [
//     "seg" => "Segunda-Feira",
//     "ter" => "Terça-Feira",
//     "qua" => "Quarta-Feira",
//     "qui" => "Quinta-Feira",
//     "sex" => "Sexta-Feira",
//     "sab" => "Sábado",
//     "dom" => "Domingo"
// ];

// echo "<br>";
// echo $dias["sab"];

?>