<!doctype html>
<html lang="pt-br">

<head><meta charset="utf-8">

</head>

<?php
session_start();
include ('conexao.php');

if(isset($_SESSION['id_profissional'])){
  $id_profissional = $_SESSION['id_profissional'];
}
else{
  $id_profissional = 0;

}
if(isset($_SESSION['id_mae'])){
  $id_mae = $_SESSION['id_mae'];

  $id_mae = 0;
}
else{
   $id_mae = 0;
}

if(($id_profissional != 0)){


?>
<!DOCTYPE html>
<html>
<head>
	<title>Sua Conta</title>
</head>
<body>
	<h1>Informações do Profissional </h1>

    <?php
    echo $_SESSION['nome_profissional'];
    $foto_perfil_mae = null;
    ?>


    <br>
    <form name= "registardados" enctype="multipart/form-data" action="#" method= "POST">
        Foto de Perfil:
        <input type="file" name ="foto_perfil_profissional" accept="img/*" id='foto_perfil_profissional'><br>
        <input type="submit" name= "atualizar" value="Atualizar">
		<h1>Informações de contato</h1>
        Telefone:
        <input type="text" name ="telefone_profissional" placeholder="()0000-0000"><br>
    <h1>Redes Sociais</h1>
        Canal do youtube:<br>
        <input type="text" name="youtube_profissional" placeholder="Insira seu canal do Youtube"><br>
        Whatsapp:<br>
        <input type="text" name="whatsapp_profissional" placeholder="Insira seu Whatsapp"><br>
        Instagram:<br>
        <input type="text" name="instagram_profissional" placeholder="Insira seu Instagram"><br>
        Linkedin:<br>
        <input type="text" name="linkedin_profissional" placeholder="Insira seu Linkedin"><br>
        Facebook:<br>
        <input type="text"name="facebook_profissional" placeholder="Insira seu Facebook"><br>
        Telegram:<br>
        <input type="text" name="telegram_profissional" placeholder="Insira seu Telegram"><br>
    <h1>Endereço</h1>
        CEP:<br>
        <input type="text" name ="cep_profissional" placeholder="Insira seu cep..."><br>
        Tipo de logradouro:<br>
            <select name="tipo_logradouro" id="select-busca1" class="form-select" aria-label="Perfil de especialista">
              <option selected disabled>Tipo de logradouro </option>
                <?php
                $sql_estado = 'select id_tipo_logradouro, tipo_logradouro from tipo_logradouro;';
                $resul_estado = mysqli_query($link, $sql_estado);
                if($resul_estado->num_rows > 0){
                    while($exibe = $resul_estado->fetch_array()){
                ?>
              <option value="<?php echo $exibe['id_tipo_logradouro']; ?>"> <?php echo utf8_encode($exibe['tipo_logradouro']); ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <br>Logradouro:<br>
        <input type="text" name ="logradouro_profissional" placeholder="Insira seu endereço...">
        <br>Cidade:<br>
            <select name="cidade" id="select-busca2" class="form-select" aria-label="Perfil de especialista">
              <option selected disabled>Cidade </option>
                <?php
                $sql_estado = 'select id_cidade, cidade from cidade;';
                $resul_estado = mysqli_query($link, $sql_estado);
                if($resul_estado->num_rows > 0){
                  while($exibe = $resul_estado->fetch_array()){
                ?>
              <option value="<?php echo $exibe['id_cidade']; ?>"> <?php echo utf8_encode($exibe['cidade']); ?></option>
                <?php
                    }
                }
                ?>
            </select>
         <br>Estado:<br>
            <select name="estado" id="select-busca3" class="form-select" aria-label="Perfil de especialista">
              <option selected disabled>Selecione: </option>
                <?php
                $sql_estado = 'select id_estado, estado from estado;';
                $resul_estado = mysqli_query($link, $sql_estado);
                if($resul_estado->num_rows > 0){
                  while($exibe = $resul_estado->fetch_array()){
                ?>
              <option value="<?php echo $exibe['id_estado']; ?>"> <?php echo utf8_encode($exibe['estado']); ?></option>
                <?php
                  }
                }
                ?>
            </select>
         <br>Bairro:<br>
         <input type="text" name ="bairro_profissional" placeholder="Insira seu bairro..."><br>
          Numero:<br>
          <input type="text" name ="num_profissional" placeholder="Insira seu numero do endereço..."><br>
          Descrição:<br>
          <input type="text" name ="desc_end_profissional" placeholder="Insira a descrição do seu endereço..."><br>
      <h1>Documentação </h1>
          Insirir sua documentação com suas informaões de formação profissional:
          <input type="file" name ="doc_profissional" accept="application/pdf"><br>
    <input type="submit" name= "salvar" value="Salvar">

    <button><a href="edicaodedados.php">Editar Conta</a></button>
    <input type="submit" name="excluir" value ="Excluir"></td>
    <?php
    $id=$_SESSION['id_profissional'];
    if(isset($_POST['atualizar'])){

        echo $id;
    //foto profissional
    if (isset($_POST['atualizar'])) {
    $imagem = $_FILES['foto_perfil_profissional'];
    $caminho = '../assets/img_perfil/profissional/';
    $nome_img = md5(time()); 
  
    move_uploaded_file($imagem['tmp_name'], $caminho.$nome_img);
  
    $sql = "UPDATE profissional SET foto_perfil_profissional = '$nome_img' WHERE id_profissional = '$id_profissional'";

    if(mysqli_query($link,$sql)){
    echo "Gravado com sucesso!";
      }else{
          echo "Erro ao gravar!";
      }
    }
    
    

    if(isset ($_POST['salvar'])){
    $tel_profissional= $_POST["telefone_profissional"];
    $yt_profissional=$_POST["youtube_profissional"];
    $wpp_profissional=$_POST["whatsapp_profissional"];
    $insta_profissional=$_POST["instagram_profissional"];
    $linkedin_profissional=$_POST["linkedin_profissional"];
    $face_profissional=$_POST["facebook_profissional"];
    $telegram_profissional=$_POST["telegram_profissional"];
    $cep_profissional=$_POST["cep_profissional"];
    $logradouro=$_POST["tipo_logradouro"];
    $estado=$_POST["estado"];
    $cidade=$_POST["cidade"];
    $bairro=$_POST["bairro_profissional"];
    $num_profissional=$_POST["num_profissional"];
    $desc_endereco=$_POST["desc_end_profissional"];
    $documento=$_POST["doc_profissional"];

    //inserir no banco de dados

      if($tel_profissional !="" && $wpp_profissional !="" && $cep_profissional!="" && $logradouro!="" &&
      $estado!="" &&  $cidade !="" && $bairro !="" && $num_profissional!="" && $desc_endereco !="" && $documento !=""){
        $query = 'INSERT INTO rede_social_profissional (youtube_profissional, whats_profissional, instagram_profissional, linkedin_profissional, facebook_profissional, telegram_profissional)
        VALUES ('.$yt_profissional.', '.$wpp_profissional.', '.$insta_profissional.', '.$linkedin_profissional.','.$face_profissional.','.$telegram_profissional.')';
        $query = 'INSERT INTO id_telefone (numero_telefone_profissional) VALUES ('.$tel_profissional.')';
        $query ='INSERT INTO id_endereco(id_tipo_logradouro, id_cidade, id_estado, bairro, numero_endereco,descricao_endereco, cep)
        VALUES ('.$logradouro.','.$cidade.','.$estado.','.$bairro.','.$num_profissional.','.$desc_endereco.','.$cep_profissional.')';
        $query ='INSERT INTO profissional (documentacao_validacao_profissional) VALUES ('.$documento.')';
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

  if (isset($_POST['excluir'])){
      $row=mysqli_fetch_array($dados);
      $id_profissional= $row['id_profissional'];
      echo $id_profissional;
      $excluir= "DELETE FROM profissional WHERE id_profissional = '.$id_profissional.'";
        if(mysqli_query($link,$excluir)){
          echo "Excluido com sucesso!";
      }else{
          echo "Erro ao excluir!";
      }
    }
    }
  }else if ($id_mae == 0){
      header('Location: login_profissional.php');
    }

    ?>
</body>
</html>
