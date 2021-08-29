
<?php
    include 'conexao.php';
<<<<<<< HEAD
    
    if(isset($_POST['submit']){
        
=======

    if(isset($_POST['submit']){
>>>>>>> 1163b917a5c6ac4204da0d40a74903cb565a7e51
    $nome_mae = $_POST['nome_mae'];
    $sobrenome_mae = ($_POST['sobrenome_mae']);
    $nome_usuario = ($_POST['nome_usuario']);
    $foto_perfil = ($_POST['foto_perfil_mae']);
    $email_mae = ($_POST['email_mae']);
    $senha_mae = ($_POST['senha_mae']);
    $confirmarsenha_mae = ($_POST['confirmarsenha_mae']);
    }
<<<<<<< HEAD
=======

>>>>>>> 1163b917a5c6ac4204da0d40a74903cb565a7e51
    if($confirmarsenha_mae == $senha_mae){
        echo "Senhas iguais";
       }else{
           echo "Senhas diferentes";
       }

    $query = "INSERT INTO 'mae' ( 'nome_mae' , 'sobrenome_mae' , 'apelido_mae' , 'email_mae' , 'senha_mae' , 'foto_perfil_mae') VALUES ('$nome_mae', '$sobrenome_mae', '$apelido_mae', '$email_mae', '$senha_mae', '$foto_perfil_mae')";
    mysqli_query($link,$query) or die("Erro ao cadastrar");

    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";





?>
