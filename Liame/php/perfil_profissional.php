<?php

/*if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

//check do the person logged in
if($_SESSION['email_profissional']==NULL){
    //haven't log in
    echo "Você não está logado";
}else{
    //Logged in
    echo "Bem-vindo" . $_SESSION['email_profissional'];*/
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
  
  }
  else{
     $id_profissional = 0;
  }
  if(isset($_SESSION['id_adm'])){
    $id_adm = $_SESSION['id_adm'];
  
  }else{
    $id_adm=0;
  }

  if(($id_profissional != 0)){
   

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sua Conta</title>
</head>
<body>
<h1> Conta </h1>

  <?php
    
   ?>

	 <form name="confgconta" action=# method="GET">
		 		<h1>Informações Básicas</h1>
        		Nome:
        		<input type="text" name ="nome_profissional" placeholder="Nome do usuario..."><br>
        				Foto de Perfil:
        				<input type="file" name ="foto" accept="image/*"><br>

								<h1> Informações de Contato</h1>
        						Telefone:
        						<input type="text" name ="tel" placeholder="Editar seu telefone ..."><br>
        								CEP:
        								<input type="text" name ="cep" placeholder="Editar o seu CEP..."><br>
        										Descrição de Endereço:
        										<input type="text" name ="end" placeholder="Editar seu Endereço..."><br>

																	<h1>Detalhes de Login</h1>
																		Email:
																			<input type="text" name ="email" placeholder="Editar email..."><br>

																			<h1>Galeria de fotos</h1>
																					<input type="file" name ="foto_galeria1" accept="image/*"><br>
																						<input type="file" name ="foto_galeria2" accept="image/*"><br>
																							<input type="file" name ="foto_galeria3" accept="image/*"><br>
        																									<input type="submit" value="Salvar">

    					</form>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
	
   

$dados=mysql_query("SELECT * FROM dados WHERE id='".$_GET['id']."'");
    $dados = mysql_fetch_array($busca);
 
}else{
if($_SERVER['REQUEST_METHOD']=='POST'){

      if( isset ($_POST['confgconta'])){
          $nome = $_POST['nome_profissional'];
          $fotoperfil = $_POST['foto'];
          $tel_profissional = $_POST['tel'];
          $cep_profissional = $_POST['cep'];
          $desc_end_profissional = $_POST['end'];
					$email_profissional - $_POST['email'];
					$fotogaleria_1=$_POST['foto_galeria1'];
					$fotogaleria_2=$_POST['foto_galeria2'];
					$fotogaleria_3=$_POST['foto_galeria3'];

$atualizar = mysql_query("UPDATE dados SET
	 nome_profissional='$nome',
	 foto_perfil_profissional='$fotoperfil',
	 telefone_profissional='$tel_profissional',
	 cep_profissional='$cep_profissional',
	 descricao_endereco_profissional='$desc_end_profissional',
	 email_profissional='$email_profissional',
	 imagens_profissional='$fotogaleria_1', '$fotogaleria_2','$fotogaleria_3',
	WHERE id='$id'")or die(mysql_error());
($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');


      		}
				}
			}
			}else if($id_profissional == 0){
				header('Location: login_profissional.php');
				  
			  }
?>
 </body>
   </html>
