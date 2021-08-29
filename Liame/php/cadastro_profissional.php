<?php
    include 'conexao.php';
    
    $nome_profissional = ($_POST['nome_profissional']);
    $sobrenome_profissional = ($_POST['sobrenome_profissional']);
    $email_profissional = ($_POST['email_profissional']);
    $senha_profissional = ($_POST['senha_profissional']);
    $confirmarsenha_profissonal = ($_POST['confirmarsenha_profissional']);
    $foto_perfil_profissional = ($_POST['foto_perfil_profissional']);
    $numero_registro_profissional = ($_POST['numero_registro_profissional']);
    $servico_profissional = ($_POST['servico_profissional']);
    $logradouro_profissional = ($_POST['logradouro_profissional']);
    $numero_endereco_profissional = ($_POST['numero_endereco_profissional']);
    $bairro_profissional = ($_POST['bairro_profissional']);
    $cidade_profissional = ($_POST['cidade_profissional']);
    $estado_profissional = ($_POST['estado_profissional']);
    $cep_profissional = ($_POST['cep_profissional']);
    
   if($confirmarsenha_profissional == $senha_profissional){
    echo "Senhas iguais";
   }else{
       echo "Senhas diferentes";
   }

    $query = "INSERT INTO 'mae' ( 'nome_mae' , 'sobrenome_mae' , 'apelido_mae' , 'email_mae' , 'senha_mae' , 'foto_perfil_mae') VALUES ('$nome_mae', '$sobrenome_mae', '$apelido_mae', '$email_mae', '$senha_mae', '$foto_perfil_mae')";
    mysqli_query($link,$query) or die("Erro ao cadastrar");
    
    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

  
    
   
?>