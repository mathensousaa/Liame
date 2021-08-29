
<?php

    
    include 'conexao.php';

    
    $nome_mae = $_POST['nome_mae'];
    $sobrenome_mae = ($_POST['sobrenome_mae']);
    $nome_usuario = ($_POST['nome_usuario']);
    $foto_perfil = ($_POST['foto_perfil_mae']);
    $email_mae = ($_POST['email_mae']);
    $senha_mae = ($_POST['senha_mae']);
    $confirmarsenha_mae = ($_POST['confirmarsenha_mae']);
  
    $array = $array['login'];

    if (isset($_POST['enviar'])){

        $tipo=$_POST{['tipo']}; 

            if ($tipo == 'profissional'){

                if ($login == ' ' || $login == null){

                    echo "O campo login deve ser preenchido";


                }else if($logarray == $login){
                
    
                    echo "Esse login já existe";
                    die();

                }else{
                    echo "Usuário cadastrado com sucesso!";
                    }

            }else{
            
                    if ($login == '' || $login == null){

                         echo "O campo login deve ser preenchido";
                    
    
                    }else if($logarray == $login){
    
                         echo "Esse login já existe";
                         die();
    
                    }else{
                        
                        echo "Usuário cadastrado com sucesso!";
                        }
                      }
                    
    }

   
    
?>