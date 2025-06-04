<?php
//Para incluir um codigo php dentro de outro usamos o include
include ("config.php");
?>
<h1><?=TITULO_SITE?></h1>

<!-- Query String -->
<a href="http://localhost/aulas_pw2_2025/prova-2B/revisao/index.php?nome=Pedro&idade=16&telefone=13998563214">Query String</a>

<?php

// Pra que serve a  variavel $_POST ?

// Para receber dados via query string, usamos a variavel super global $_GET['chave']

// função isset verifica se uma variavel está definida ou não vazia (nula)
if(isset($_GET['nome']) and isset($_GET['idade']) and isset($_GET['telefone'])){

$nome = $_GET['nome'];
$idade = $_GET['idade'];
$telefone = $_GET['telefone'];

// Para concatenar (juntar) um texto (strings) e uma variavel utilizamos o ponto (.)
echo "Nome: " . $nome;

}

//para redirecionar para outra pagina usamos a funcao header com o atributo Location:
header("Location: pagina.php");


//O conceito de componentes, envolve a divisão do projeto em partes menores que podem ser reutilizadas.

//Sessoes em PHP - São usadas para se transmitir informações entre paginas diferentes, atraves das variaveis de sessão ( $_SESSION['chave']);

// precisamos inicializar a sessão em todas as paginas que forem trabalhar com sessão usando o session_start()
session_start();
$_SESSION['login'] = "ok";

?>