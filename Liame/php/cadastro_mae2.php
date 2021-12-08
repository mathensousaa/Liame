<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
   
  </head>
  <body>
    
  
<?php
    session_start();
    include ('conexao.php');

    //variavel da sessao
    $nome_mae = $_POST["nome_mae"];
    $email_mae = $_POST['email_mae'];
    $senha_mae = $_POST['senha_mae'];
    $confirmarsenha_mae = $_POST['confirmarsenha_mae'];

    // validacao da senha
    if($confirmarsenha_mae == $senha_mae){

        //checando se o email ja existe
        $user_check_query = "SELECT * FROM mae WHERE email_mae = '$email_mae'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);

        if($conta>=1){
            header('location: email_mae.php');
        }else{
            //criptografar senha
            $senha_criptografada_mae = md5($senha_mae);

            //inserir no banco de dados
            $query = 'INSERT INTO mae (nome_mae, email_mae, senha_mae) 
            VALUES ("'.$nome_mae.'", "'.$email_mae.'", "'.$senha_criptografada_mae.'")';
            
            if (mysqli_query($link, $query)){
                echo "Cadastrado com sucesso";
                header('Location: login_mae.php');
            }else{
                echo "Erro ao cadastrar";
            }
        }
        ?>         
        <?php 
            }else{
                header('location: recuperacao.php');
            }
        ?>   
        </div>
    </body>
    </html>