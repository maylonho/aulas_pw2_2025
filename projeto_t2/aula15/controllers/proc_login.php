<?php
include "config.php";
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($usuario=="admin" and $senha=="12345"){
    echo "Acesso autorizado.";
    $_SESSION['usuario'] = $usuario;
    $_SESSION['usuario_logado'] = true;
}
else{
    echo "usuario ou senha incorretos.";
    $_SESSION['usuario_logado'] = false;
}

header('Location: ' . BASE_URL);