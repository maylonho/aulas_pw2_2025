<?php
session_start();

if(isset($_SESSION['cadastro_sucesso'])){
    echo "<h1>Cadastro realizado com sucesso!</h1>";
    unset($_SESSION['cadastro_sucesso']);
}

if(isset($_SESSION['cadastro_falha'])){
    echo "<h1>Cadastro não realizado, tente novamente!</h1>";
    unset($_SESSION['cadastro_falha']);
}

?>