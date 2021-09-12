<!DOCTYPE html>
<html lang="pt-br">
   <head>
    <meta charset="utf-8">
    <title></title>
    </head>
  </head>
      <body>

        <form method="POST" action="">
              Insira seu E-mail:<br>
              <input name="email" placeholder="e-mail" type="text"><br>
              Insira sua senha:<br>
              <input name="senha" type="password"><br>
              <a href="recuperarsenha.php">Esqueceu a senha?</a><br>
              <a href="cadastro.php">Não sou cadastrado</a>
              <input value="Entrar"type="button"></a><br>
        </form>
    </body>
</html>
<?php
   include("conexao.php");

    if(!isset($_SESSION))
        session_start();

    $_SESSION['email'] = $mysqli->escape_string($_POST['email']);
    $_SESSION['senha'] =md5(md5($_POST['senha_func']));

    $sql_code ="SELECT senha, codigo FROM usuário WHERE email ='$_SESSION[email]'";
    $sql_query =$mysqli->query($sql_code) or die ($mysqli->error);
    $dado =$sql_query->fetch_assoc();
    $total=$sql_query->num_rows;

    if($total == 0){
      $erro[] = "Este email não pertence a nenhum usuário.";
    }else{
      if($dado['senha'] == $_SESSION['senha']){
        $_SESSION['usuário'] = $dado['codigo'];
      }else{
        $erro[] ="senha incorreta.";
    }
  }
  if(count($erro) == 0 || !isset($erro)){
    
  }
}
 ?>
