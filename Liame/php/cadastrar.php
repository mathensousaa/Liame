<?php
    echo "página de cadastro";

    $login = $_POST['login'];
    $senha = MD5 ($_POST['senha']);
    $connect = mysql_connect('localhost', 'usuario', 'senha');
    $db = mysql_select_db('liame');
    $query_select = "SELECT email_mae FROM mae WHERE email_mae = '$login';
    $select = mysql_query($query_select, $connect);
    $array = $array['login'];

        if ($login == "" || $login == null){
            echo "<script language='javascript' type='text/javascript'>
            alert('O campo login deve ser preenchido');window.location.href='
            cadastrar.php';</script>";

        }else{
            if($logarray == $login){

                echo"<script language='javascript' type='text/javascript'>
                alert('Esse login já existe');window.location.href='
                cadastrar.php';</script>";
                die();

        }else{
            $query = "INSERT INTO mae (email_mae,senha_mae) VALUES ('$login','$senha')";
            $insert = mysql_query($query,$connect);
        
             if($insert){
                 echo"<script language='javascript' type='text/javascript'>
                  alert('Usuário cadastrado com sucesso!');window.location.
                  href='entrar.php'</script>";
            }else{
                echo"<script language='javascript' type='text/javascript'>
                  alert('Não foi possível cadastrar esse usuário');window.location
                  .href='entrar.php'</script>";
            }
        }
     }

?>