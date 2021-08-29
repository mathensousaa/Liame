<?php
  include("conexao.php");

  if(isset($_POST[ok])){
      $email = $mysqli -> escape_string($_POST['email']);

  if(!filter_var($email, filter_validate_email)){
      $erro[] = "E-mail inválido";
  }
  $sql_code = "SELECT senha, codigo FROM usuario WHERE email = '$email'";
  $sql_query = $mysqli -> query($sql_code) or die ($mysqli -> error);
  $dado = $sql_query ->fetch_assoc();
  $total = $sql_query -> num_rows;

    if($total == 0)
       $erro[] = "O e-mail informado não existe"

  	if(count($erro) == 0 && $total > 0){




      $novasenha = substr(md5(time()), 0, 6);
      $nscriptografada = md5(md5($novasenha));


  if(mail($email, "Sua nova senha ", "Sua nova senha:" .$novasenha)){
      $sql_code = "UPDATE usuario SET senha = '$nscriptografada' WHERE email ='$email'";
      $sql_query = $mysqli -> query($sql_code) or die ($mysqli ->error);

    if($sql_query)
      $erro[] = "Senha alterada com sucesso";
    }

  }
}
 ?>
 <html>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
      	<title> Página Recuperação de Senha</title>
    </head>
    		<body>
          <?php
            if(count($erro) > 0 )
            foreach ($erro as $msg){
               echo "<p> $msg </p>";
            }
          ?>
            <form method = "POST" action ="">
              Insira seu email para redefinir a senha:<br>
              <input placeholder = "Insira seu E-mail" name = "email" type = "text">
              <input name = "ok" value = "ok" type = "submit">
            </form>
        </body>
</html>
