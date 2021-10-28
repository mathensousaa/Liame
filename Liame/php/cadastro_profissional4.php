<?php
    session_start();
    include ('conexao.php');
//variavel da sessao
    $nome_profissional = $_SESSION['nome_profissional'];
    $especialidade_profissional = $_SESSION['especialidade_profissional'];
    $numero_registro_profissional = $_SESSION['numero_registro_profissional'];
    $cep_profissional = $_SESSION['cep_profissional'];
    $nome_logradouro_profissional = $_SESSION['nome_logradouro_profissional'];
    $numero_endereco_profissional = $_SESSION['numero_endereco_profissional'];
    $bairro_profissional = $_SESSION['bairro_profissional'];
    $cidade_profissional = $_SESSION['cidade_profissional'];
    $complemento_endereco_profissional = $_SESSION['complemento_endereco_profissional'];
    $email_profissional = $_POST['email_profissional'];
    $senha_profissional = $_POST['senha_profissional'];
    $confirmarsenha_profissional = $_POST['confirmarsenha_profissional'];

// validacao do formulario
    if($confirmarsenha_profissional != $senha_profissional){
        array_push($erro, "Senhas precisam ser iguais");
    }

//checando se o usuario e a senha ja existem
    $user_check_query = "SELECT * FROM profissional WHERE email_profissional= '$email_profissional'";
    $resultado = mysqli_query($link, $user_check_query);
    $conta = mysqli_num_rows($resultado);
    if($conta>1){
            echo "Esse email já está em uso";
        }else{
            $senha = md5($senha_profissional);
            $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional, numero_endereco_profissional, descricao_endereco_profissional, cep_profissional, status_profissional) VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_profissional.'", "'.$numero_endereco_profissional.'", "'.$complemento_endereco_profissional.'", "'.$cep_profissional.'", "0")';

            //inserir no banco de dados
            $inserir = mysqli_query($link, $query);
            if($inserir==TRUE){
                    session_destroy();
                    echo "cadastrado com sucesso";
                    // header (index.php);
                }else{
                    echo "Erro ao cadastrar";
                }
        }
?>
