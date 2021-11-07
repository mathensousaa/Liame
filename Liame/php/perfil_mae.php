<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
  }

//check do the person logged in
if($_SESSION['email_mae']==NULL){
    //haven't log in
    echo "Você não está logado";
}else{
    //Logged in
	echo "Bem-vindo " . $_SESSION['email_mae'];
    
    
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sua Conta</title>
</head>
<body>
<form name="confgconta" action=# method="POST">
	<h1>Informações da Mãe </h1>
    Nome:                   
    <input type="text" name ="nome_profissional" placeholder="Nome do usuario..."><br>
        Email:
         <input type="text" name ="email_profissional" placeholder="Email do usuario..."><br>
        Foto de Perfil:
        <input type="file" name ="foto_perfil_mae" accept="image/*"><br>

			<h1> Informações do Bebê</h1>
        	Nome do Bebê
        	<input type="text" name ="nome_bebe" placeholder="Insira o nome do seu filho(a) ..."><br>
        	Sexo do Bebê
        	<input type="text" name ="sexo_bebe" placeholder="Insira o sexo do seu filho(a)..."><br>
        	Idade do Bebê:
        	<input type="text" name ="idade_bebe" placeholder="Insira a idade do seu filho(a)..."><br>
    <input type="submit" value="Salvar">



<?php













?>
</body>
</html>