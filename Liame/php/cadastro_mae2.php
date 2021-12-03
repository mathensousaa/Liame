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
                echo "Esse email já está em uso";
        }else{
            //criptografar senha
            $senha_criptografada_mae = md5($senha_mae);

            //inserir no banco de dados
            $query = 'INSERT INTO mae (nome_mae, email_mae, senha_mae) VALUES ("'.$nome_mae.'", "'.$email_mae.'", "'.$senha_criptografada_mae.'")';
            
            if (mysqli_query($link, $query)){
                echo "Cadastrado com sucesso";
                header('Location: ../index.php');
            }else{
                echo "Erro ao cadastrar";
            }
        }
    }else{
        echo "Senhas precisam ser iguais";
    }     
    session_destroy(); 
?>