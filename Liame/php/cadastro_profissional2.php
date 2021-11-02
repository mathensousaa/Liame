<?php
    session_start();
    include ('conexao.php');
//variavel da sessao
    $nome_profissional = $_POST["nome_profissional"];
    $email_profissional = $_POST['email_profissional'];
    $senha_profissional = $_POST['senha_profissional'];
    $confirmarsenha_profissional = $_POST['confirmarsenha_profissional'];



//Para ver se está entrando dos os dados da sessão
    echo "ver se a sessão está funcionado</br>
    nome: " . $nome_profissional . "</br>
    email: " . $email_profissional . "</br>
    senha: " . $senha_profissional . "</br>
    confirmar senha: " . $confirmarsenha_profissional . "</br></br></br>";




// validacao da senha
    if($confirmarsenha_profissional == $senha_profissional){
        //checando se o email ja existe
        $user_check_query = "SELECT * FROM profissional WHERE email_profissional = '$email_profissional'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);
        if($conta>=1){
                echo "Esse email já está em uso";
        }else{
            //criptografar senha
            $senha_criptografada_profissional = md5($senha_profissional);

            echo "senha criptografada </br>". $senha_criptografada_profissional . "</br></br>";

            //inserir no banco de dados
            $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional) VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_criptografada_profissional.'")';
            
            echo "saber se o insert está funcionado</br>".$query."</br></br>";
            
            if (mysqli_query($link, $query)){
                echo "Cadastrado com sucesso";
            }else{
                echo "Erro ao cadastrar";
            }
        }
    }else{
        echo "Senhas precisam ser iguais";
    }     
    //session_destroy(); 