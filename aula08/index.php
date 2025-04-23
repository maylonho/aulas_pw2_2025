<?php
    session_start();
?>
<h1>Aula 08 - Métodos GET e POST</h1>

<form action="dados.php" method="post">
    <label for="">Usuário</label>
    <input type="text" name="usuario">
    <br>
    <label for="">Senha:</label>
    <input type="password" name="senha">
    <br>
    <button>Entrar</button>
</form>
<?php
    if(isset($_SESSION['login_invalido'])){
    echo '<p style="color: red;">Usuário ou senha incorretos</p>';
    }
    unset($_SESSION['login_invalido']);
?>
