<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    Aqui vai o código HTML que fará seu site aparecer.
  </body>
</html>





<?php
    echo "página de cadastro";

    $connect = mysql_connect('localhost', 'root', '');
    $db = mysql_select_db('liame');

    
    $login = $_POST['login'];
    $senha = MD5 ($_POST['senha']);
    $array = $array['login'];
    $query_select = "SELECT email_profissional FROM profissional WHERE email_profissional = '$login' AND senha_profissional = '$senha';
    $select = mysql_query($query_select, $connect);

    if (isset({$_POST['enviar']})){

        $tipo=$_POST{['tipo']};

        if ($tipo == 'profissional'){

<<<<<<< HEAD
        }else{
            $query = "INSERT INTO mae (email_mae,senha_mae) VALUES ('$login','$senha')";
            $insert = mysql_query($query,$connect);

             if($insert){
                 echo"<script language='javascript' type='text/javascript'>
                  alert('Usuário cadastrado com sucesso!');window.location.
                  href='entrar.php'</script>";
=======
            if ($login == ' ' || $login == null){
                echo O campo login deve ser preenchido;
    
>>>>>>> 747d604859fd35252be30a9e4f9e5826a848dfd7
            }else{
                if($logarray == $login){
    
                    echo Esse login já existe;
                    die();
    
            }else{
                
                $query = INSERT INTO profissional (email_profissional,senha_profissional) VALUES ('$login','$senha');
                $insert = mysql_query($query,$connect);
                
                 if($insert){
                     echo Usuário cadastrado com sucesso!;
                }else{
                    echo Não foi possível cadastrar esse usuário;
                }
            }
        }
        }else{
            
            if ($login == '' || $login == null){
                echo O campo login deve ser preenchido;
    
            }else{
                if($logarray == $login){
    
                    echo Esse login já existe;
                    die();
    
            }else{
                $query = INSERT INTO mae (email_mae,senha_mae) VALUES ('$login','$senha');
                $insert = mysql_query($query,$connect);
            
                 if($insert){
                     echo Usuário cadastrado com sucesso!;
                }else{
                    echo Não foi possível cadastrar esse usuário;
                }
            }
         }
        
    ]

<<<<<<< HEAD
?>
=======
    
?>
>>>>>>> 747d604859fd35252be30a9e4f9e5826a848dfd7
