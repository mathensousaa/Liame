<?php
    session_start();
    include ('conexao.php');

    //variavel da sessao
    $nome_adm = $_POST["nome_adm"];
    $email_adm = $_POST['email_adm'];
    $senha_adm = $_POST['senha_adm'];
    $confirmarsenha_adm = $_POST['confirmarsenha_adm'];

    // validacao da senha
    if($confirmarsenha_adm == $senha_adm){

        //checando se o email ja existe
        $user_check_query = "SELECT * FROM adm WHERE email_adm = '$email_adm'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);

        if($conta>=1){
            header('location: email_adm.php');
        }else{
            //criptografar senha
            $senha_criptografada_adm = md5($senha_adm);

            //inserir no banco de dados
            $query = 'INSERT INTO adm (nome_adm, email_adm, senha_adm) VALUES ("'.$nome_adm.'", "'.$email_adm.'", "'.$senha_criptografada_adm.'")';
            
            if (mysqli_query($link, $query)){
                header('Location: ../index.php');
            }else{
                echo "Erro ao cadastrar";
            }
        }
    }else{
        header('location: recuperacao_adm.php');
        
    }     
    session_destroy(); 
?>