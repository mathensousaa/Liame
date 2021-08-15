<?php
    echo "página de entrar na conta";

   
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('localhost','nome_de_usuario','senha');
$db = mysql_select_db('liame');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM mae WHERE email_mae =
    '$login' AND senha_mae = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='entrar.php';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.html");
      }
  }

?>