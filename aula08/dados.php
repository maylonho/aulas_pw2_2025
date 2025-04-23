<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == 'admin' && $senha == '12345'){
    echo 'Login bem sucedido, seja bem vindo!';

    echo 'Usuário: '.$usuario.'<br/>';
    echo 'Senha: '.$senha.'<br/>';
}
else{
    header('Location: index.php');
    echo 'Dados incorretos';
    $_SESSION['login_invalido'] = true;
}

?>