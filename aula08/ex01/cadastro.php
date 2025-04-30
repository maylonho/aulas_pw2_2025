<?php
session_start();
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$turma = $_POST['turma'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($nome == "" || $idade == "" || $turma == "" || $usuario == "" || $senha == ""){
    $_SESSION['cadastro_falha'] = '';
}
else{
    $_SESSION['cadastro_sucesso'] = '';
}

header('Location: situacao.php');

?>