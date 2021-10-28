<?php
    session_start();
    $_SESSION['cep_profissional'] = $_POST["cep_profissional"];
    $_SESSION['nome_logradouro_profissional'] = $_POST["nome_logradouro_profissional"];
    $_SESSION['numero_endereco_profissional'] = $_POST["numero_endereco_profissional"];
    $_SESSION['bairro_profissional'] = $_POST["bairro_profissional"];
    $_SESSION['cidade_profissional'] = $_POST["cidade_profissional"];
    $_SESSION['complemento_endereco_profissional'] = $_POST["complemento_endereco_profissional"];
?>

<form action="cadastro_profissional4.php" method="post"/>
    Email:<input name="email_profissional" type="text"/></br>
    Senha:<input name="senha_profissional" type="text"/></br>
    Confirmar senha:<input name="confirmarsenha_profissional" type="text"/></br>
    <input type="submit" value="Cadastrar"/>
</form>