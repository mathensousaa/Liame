<?php
    session_start();
    include ('conexao.php');
//variavel da sessao
    $nome_mae = $_SESSION['nome_mae'];
    $apelido_mae = $_SESSION['apelido_mae'];
    $email_mae = $_POST['email_mae'];
    $senha_mae = $_POST['senha_mae'];
    $confirmarsenha_mae = $_POST['confirmarsenha_mae'];

// validacao do formulario
    if($confirmarsenha_mae != $senha_mae){
        array_push($erro, "Senhas precisam ser iguais");
    }

//checando se o usuario e a senha ja existem
    $user_check_query = "SELECT * FROM mae WHERE email_mae = '$email_mae'";
    $resultado = mysqli_query($link, $user_check_query);
    $conta = mysqli_num_rows($resultado);
    if($conta>1){
            echo "Esse email já está em uso";
        }else{
            $senha = md5($senha_mae);
            $query = 'INSERT INTO mae (nome_mae, apelido_mae, email_mae, senha_mae) VALUES ("'.$nome_mae.'", "'.$apelido_mae.'", "'.$email_mae.'", "'.$senha_mae.'")';
            
            //inserir no banco de dados
            $inserir = mysqli_query($link, $query);
            if($inserir==TRUE){
                    session_destroy();
                    echo "cadastrado com sucesso";
                    // header (resultado.php);
                }else{
                    echo "Erro ao cadastrar";
                }
        }
?>