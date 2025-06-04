<?php
include '../php/config.php';
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario == "admin" and $senha == "12345"){
    echo "Acesso autorizando com sucesso!";
    $_SESSION['usuario'] = $usuario;
    $_SESSION['usuario_logado'] = "sim";
}
else{
    echo "Usuario ou senha incorretos!";
    $_SESSION['usuario_logado'] = "nao";
}

header('Location: ' . BASE_URL);