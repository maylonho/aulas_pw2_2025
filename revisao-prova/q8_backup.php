<h1>Questão 8</h1>

<?php
function gerarPares($numero){
    for($i=0; $i < $numero; $i++){
        $par = ($i * 2);
        echo "$par é par<br>";
    }
}
gerarPares(10);

?>