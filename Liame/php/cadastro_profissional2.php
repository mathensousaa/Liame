<?php
    session_start();
    include ('conexao.php');

    if(isset($_POST['submit'])){
//variavel da sessao
    $nome_profissional = $_POST['nome_profissional'];
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
           echo $query;
           if (mysqli_query($link, $query)){
                header('Location: perfil_profissional1.php');
            }else{
                echo "Erro ao cadastrar";
            }
        }
    }else{
        header('location: recuperacao_profissional.php');
       
    }     
    session_destroy(); 
}
?>