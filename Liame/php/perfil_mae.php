<?php
if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
    session_start();
    
  }

//check do the person logged in
if($_SESSION['email_mae']==NULL){
    //haven't log in
    echo "Você não está logado";
    header("Location:login_mae.php");
}else{
    //Logged in
    include ('conexao.php');

    


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sua Conta</title>
</head>
<body>
<form name="confgconta" action=# method="POST"> 
	<h1>Informações da Mãe </h1>

    <?php
    echo $_SESSION['nome_mae'];
    $foto_perfil_mae = null;
    ?> 
    

    <br>
       <!-- Nome:                   
    <input type="text" name ="nome_profissional" placeholder="Nome do usuario..."><br>
        Email:
         <input type="text" name ="email_profissional" placeholder="Email do usuario..."><br>-->

        Foto de Perfil:
        <input type="file" name ="foto_perfil_mae" accept="image/*"><br>
        <input type="submit" name= "submit" value="Atualizar">

			<h1> Informações do Bebê</h1>
        	Nome do Bebê
        	<input type="text" name ="nome_bebe" placeholder="Insira o nome do seu filho(a) ..."><br>
        	Sexo do Bebê
        	<input type="text" name ="sexo_bebe" placeholder="Insira o sexo do seu filho(a)..."><br>
        	Idade do Bebê:
        	<input type="text" name ="idade_bebe" placeholder="Insira a idade do seu filho(a)..."><br>
    <input type="submit" name= "submit2" value="Salvar">






<?php
echo $foto_perfil_mae;
$id=$_SESSION['id_mae'];
if(isset($_POST['submit'])){


    echo $id;

$foto_perfil_mae = $_POST['foto_perfil_mae'];

$query1 = ("UPDATE mae SET foto_perfil_mae = '$foto_perfil_mae' WHERE id_mae = '$id'");

//echo $sql;

if(mysqli_query($link,$query1)){
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}


}elseif(isset($_POST['submit2'])){

$nome_bebe = $_POST['nome_bebe'];
$sexo_bebe = $_POST['sexo_bebe'];
$idade_bebe = $_POST['idade_bebe'];
$query2 = 'INSERT into bebe (nome_bebe, sexo_bebe, idade_bebe, id_mae) values("'.$nome_bebe.'", "'.$sexo_bebe.'", "'.$idade_bebe.'", "'.$id.'")';


if(mysqli_query($link,$query2)){
    echo "Gravado com sucesso!";
}else{
    echo "Erro ao gravar!";
}
}else{

}

$query ='SELECT id_bebe, nome_bebe, sexo_bebe, idade_bebe FROM bebe WHERE id_mae = "'.$id.'"';
$dados = mysqli_query($link, $query) or die(mysql_error());
/*$linha = mysqli_fetch_assoc($dados);
$total = mysqli_num_rows($dados);
echo $total;*/

?>
<input type= "submit" name="exibir" value="Exibir bebês cadastrados">

<?php
if (isset($_POST['exibir'])){

    while($row = mysqli_fetch_array($dados))
    {
    echo "<table>";
    echo "<td>" . $row['id_bebe'] . "</td>";
    echo "<td>" . $row['nome_bebe'] . "</td>";
    echo "<td>" . $row['sexo_bebe'] . "</td>";
    echo "<td>    " . $row['idade_bebe'];
    ?>
    <input type="submit" name="editar" value ="Editar">
    <input type="submit" name="excluir" value ="Excluir"></td>
    
    <?php
    echo "</tr>";
    }
    echo "</table>";
  

    
}

if (isset($_POST['excluir'])){
    $row=mysqli_fetch_array($dados);
    $id_bebe= $row['id_bebe'];
    echo $id_bebe;
    $excluir= "DELETE FROM bebe WHERE id_bebe = '.$id_bebe.'";
    echo "oooo";
    if(mysqli_query($link,$excluir)){
        echo "Excluido com sucesso!";
    }else{
        echo "Erro ao excluir!";
    }
}



/*
if($total > 0) {
    // inicia o loop que vai mostrar todos os dados
    do {
?>
        <p><?=$linha['nome_bebe']?> / <?=$linha['sexo_bebe']?> / <?=$linha['idade_bebe']?></p>
<?php
    // finaliza o loop que vai mostrar os dados
    }while($linha = mysqli_fetch_assoc($dados));
// fim do if
    
}*/

}
?>
</body>
</html>