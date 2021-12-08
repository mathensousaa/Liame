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
    $nome_profissional = $_POST["nome_profissional"];
    $email_profissional = $_POST['email_profissional'];
    $senha_profissional = $_POST['senha_profissional'];
    $confirmarsenha_profissional = $_POST['confirmarsenha_profissional'];

    // validacao da senha
    if($confirmarsenha_profissional == $senha_profissional){

        //checando se o email ja existe
        $user_check_query = "SELECT * FROM profissional WHERE email_profissional = '$email_profissional'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);

        if($conta>=1){
            header('location: email_profissional.php');
        }else{
            //criptografar senha
            $senha_criptografada_profissional = md5($senha_profissional);

            //inserir no banco de dados
            $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional) 
            VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_criptografada_profissional.'")';
            
            echo $query . '<br>';

            if (mysqli_query($link, $query)){
                echo "Cadastrado com sucesso";
                header('Location: login_profissional.php');
            }else{
                
                header('location: erro_cadastro_profissional.php');
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