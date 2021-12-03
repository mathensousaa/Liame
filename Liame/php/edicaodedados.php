<?php
session_start();
include ('conexao.php');
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];
} 
else{
  $id_mae = 0;
  
} 
if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];
  
  $id_profissional = 0;
}
else{
   $id_profissional = 0;
}

if(($id_mae != 0)){
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Dados da Conta</title>
</head>
<body>
  <?php
  // verificar se o user esta logado
    /*if(!function_exists("protect")){

      function protect(){

        if(!isset($session))
            session_start();

        if(!isset($_session['usuario']) || !is_numeric($_session['usuario'])){
          header("Location: login.php");
        }
      }
    }*/

   ?>

	 <form name="confgconta" action=# method="POST">
		 <h1>Alterar Informações do Perfil</h1>
          Foto de Perfil: <input type="file" name ="nova_foto_mae" accept="image/*"><br>
          Nome: <input type="text" name ="novo_nome_mae" placeholder="Alterar seu nome..."><br>
          Email :<input type="text" name ="novo_email_mae" placeholder="Alterar seu email ..."><br>
          <input type="submit" name= "editar" value="Salvar">
    </form>
  <?php
	include("conexao.php");
  //alterar dados
  if(isset ($_POST['editar'])){
        $foto_perfil_mae = $_POST['nova_foto_mae'];
        $alterar_nome_mae = $_POST ['novo_nome_mae'];
        $alterar_email_mae = $_POST['novo_email_mae'];

        $query = ("UPDATE mae SET foto_perfil_mae ='$foto_perfil_mae', nome_mae='$alterar_nome_mae',email_mae='$alterar_email_mae'");

//echo $sql;

if(mysqli_query($link,$query)){
    echo "Atualizado com sucesso!";
}else{
    echo "Erro ao gravar!";
}

  
}

?>
  <br><a href=perfil_mae.php><button>Voltar para perfil</button></a><br>
<?php
}else if($id_profissional == 0){
  echo"sai daqui";
  
}
?>

</body>
</html>

