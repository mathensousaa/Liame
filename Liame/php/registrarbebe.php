<!DOCTYPE html>
<html>
<head>
	<title>Registrar Criança</title>
</head>
<body>

  <?php
	// verificar se o user esta logado
    if(!function_exists("protect")){

      function protect(){

        if(!isset($session)){
            session_start();

        if(!isset($_session['usuario']) || !is_numeric($_session['usuario'])){
          header("Location: login.php");
        }
      }
    }
  }
	?>
			<h1> Dados da criança </h1><br>
    <form name="dadosdobebe" method="POST">
      Nome da criança: <input type="text" name ="nome_bebe" placeholder="Insira o nome da criança..."><br>
      
    <input type="submit" name = "registrar" value="Registrar">

      <?php
      include("conexao.php");
      //declarar variaveis
      if(isset ($_POST['registrar'])){
        $nomedobebe = $_POST['nome_bebe'];
       

        
      //inserir no banco de dados

        if($nomedobebe !=""){
          $id=$_SESSION['id_mae'];
          $query = 'INSERT INTO bebe (nome_bebe, id_mae) VALUES ("'.$nomedobebe.'", "'.$id_mae.'")';
          $resultado= mysqli_query($link, $query);
             if ($resultado){
                 echo "Registrado com sucesso";
             }else{
                 echo "Algo deu errado :(";
             }
        }else{
          echo "Preencha os campos corretamente!";
        }
      }
    
    ?>

     <a href="atividades.php"><button>Finalizar</button></a>
    </body>
   </html>
