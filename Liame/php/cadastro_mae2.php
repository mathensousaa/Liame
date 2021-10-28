<?php
    session_start();
    $_SESSION['nome_mae'] = $_POST["nome_mae"];
    $_SESSION['apelido_mae'] = $_POST["apelido_mae"];
?>

<form action="cadastro_mae3.php" method="post"/>
    Email:<input name="email_mae" type="text"/></br>
    Senha:<input name="senha_mae" type="text"/></br>
    Confirmar senha:<input name="confirmarsenha_mae" type="text"/></br>
    <input type="submit" value="Cadastrar"/>
</form>
