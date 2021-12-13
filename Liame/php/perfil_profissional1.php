<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar perfil profissional | Liame</title>
  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">
  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">
  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
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

<body>
  <br>
	<h1>Informações do Profissional </h1>

    <?php
    
    echo $_SESSION['nome_profissional'];
    $foto_perfil_mae = null;
    ?>


    <br>
    <form name= "registardados" enctype="multipart/form-data" action="#" method= "POST">
        Foto de Perfil:
        <input type="file" name ="foto_perfil_profissional" accept="img/*" id='foto_perfil_profissional' required><br>
        <input type="submit" name= "atualizar" value="Atualizar">
        <h3 class="hero-title">
        Informações de contato
            </h3>
        <h5> Telefone: </h5>
            <div class="">
              <form class="ps-lg-5 me-lg-5" action="" method="post">
                <div class="mb-3">
                  <input name="ddd_profissional" type="text" class="" id="ddd-profissional" placeholder="DDD" required>
                </div>  
                <div class="mb-3">
                  <input name="telefone_profissional" type="text" class="" id="telefone-profissional" placeholder="0000-0000" required>
                </div> 
          </div>
      </form>
	
       
    <h3>Redes Sociais</h5>
      <div class="">
        <form class="ps-lg-5 me-lg-5" action="" method="post">
          <div class="mb-3">
            Youtube:
            <input name="youtube_profissional" type="text" class="" id="canal-profissional" placeholder="Insira seu canal do Youtube"  required>
          </div> 

          <div class="mb-3">
          Whatsapp:
            <input name="Whatsapp_profissional" type="text" class="" id="Whatsapp_profissional" placeholder="Insira seu Whatsapp"  required>
          </div> 

          <div class="mb-3">
          Instagram:
            <input name="Instagram_profissional" type="text" class="" id="instagram_profissional" placeholder="Insira seu Instagram"  required>
          </div>
       
          <div class="mb-3">
          Linkedin:
            <input name="Linkedin_profissional" type="text" class="" id="linkedin_profissional" placeholder="Insira seu Linkedin"  required>
          </div>
       
          <div class="mb-3">
          Facebook:
            <input name="Facebook_profissional" type="text" class="" id="facebook_profissional" placeholder="Insira seu Facebook"  required>
          </div>
       
          <div class="mb-3">
          Telegram:
            <input name="Telegram_profissional" type="text" class="" id="telegram_profissional" placeholder="Insira seu Telegram"  required>
          </div>

        <br>
    <h1>Endereço</h1>
      <div class="mb-3">
        CEP:
          <input name="CEP_profissional" type="text" class="" id="CEP_profissional" placeholder="Insira seu CEP"  required>
      </div>

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
            <br>
            <div class="mb-3">
            Logradouro:
              <input name="logradouro_profissional" type="text" class="" id="logradouro_profissional" placeholder="Insira seu endereço"  required>
            </div>
          
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
                $id_estado = $_POST['id_estado'];
                  }
                }
                ?>
            </select>
            <br>
            <div class="mb-3">
                Cidade:
              <input name="Cidade_profissional" type="text" class="" id="cidade_profissional" placeholder="Insira sua cidade"  required>
            </div>

            <div class="mb-3">
              Bairro:
              <input name="Bairro_profissional" type="text" class="" id="bairro_profissional" placeholder="Insira seu bairro"  required>
            </div>
            
            <div class="mb-3">
              Numero:
              <input name="Numero_profissional" type="text" class="" id="numero_profissional" placeholder="Insira o numero:"  required>
            </div>
         
            <div class="mb-3">
              Complemento:
              <input name=" Complemento_profissional" type="text" class="" id="complemento_profissional" placeholder="Insira seu complemento:"  required>
            </div>
          
      <h1>Documentação </h1>
          Insirir sua documentação com suas informaões de formação profissional:
          <input type="file" name ="doc_profissional" accept="application/pdf" required><br>
    <input type="submit" name="salvar" value="Salvar">

    <button><a href="edicaodedados.php">Editar Conta</a></button>
    <input type="submit" name="excluir" value ="Excluir"></td>
    </form>
    <?php

    if(isset($_POST['atualizar'])){

        
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
  }
    
    

    if(!empty($_POST)){
    $ddd_tel_profissional= $_POST["ddd_profissional"];
    $numero_tel_profissional = $_POST["telefone_profissional"];
    $yt_profissional=$_POST["youtube_profissional"];
    $wpp_profissional=$_POST["whatsapp_profissional"];
    $insta_profissional=$_POST["instagram_profissional"];
    $linkedin_profissional=$_POST["linkedin_profissional"];
    $face_profissional=$_POST["facebook_profissional"];
    $telegram_profissional=$_POST["telegram_profissional"];
    $cep_profissional=$_POST["cep_profissional"];
    $tipo_logradouro=$_POST["tipo_logradouro"];
    $logradouro=$_POST["logradouro_profissional"];
    $estado=$_POST["estado"];
    $cidade=$_POST["cidade_profissional"];
    $bairro=$_POST["bairro_profissional"];
    $num_profissional=$_POST["num_profissional"];
    $desc_endereco=$_POST["desc_end_profissional"];
    
    // Verifica se o campo PDF está vazio
    if ($_FILES['doc_profissional']['name'] != "") {

    // Caso queira mudar o nome do arquivo basta descomentar a linha abaixo e fazer a modificação
    //$_FILES['pdf']['name'] = "nome_do_arquivo.pdf";
  
    // Move o arquivo para uma pasta
    move_uploaded_file($_FILES['doc_profissional']['tmp_name'],"documentos/".$_FILES['doc_profissional']['name']);
  
    // $pdf_path é a variável que guarda o endereço em que o PDF foi salvo (para adicionar na base de dados)
    $pdf_path = "../assets/doc_profissional/".$_FILES['doc_profissional']['name'];
  
  } else {
  // Caso seja falso, retornará o erro
   echo "Não foi possível enviar o arquivo";
  }

    //inserir no banco de dados

      
         $query_rede_social = 'INSERT INTO rede_social_profissional
        (youtube_profissional, whatsapp_profissional, instagram_profissional, linkedin_profissional, facebook_profissional, telegram_profissional, id_profissional)
        VALUES ("'.$yt_profissional.'", "'.$wpp_profissional.'", "'.$insta_profissional.'", "'.$linkedin_profissional.'","'.$face_profissional.'", "'.$telegram_profissional.'", '.$id_profissional.')';
        $resultado = mysqli_query($link, $query_rede_social);

        // cadastrar o telefone, consultar e recuperar o id do telefone cadastrado, fazer update em profissional para add o id do telefone
         $query_telefone = 'INSERT INTO telefone_profissional (ddd_telefone_profissional, numero_telefone_profissional, id_profissional)
        VALUES ("'.$ddd_tel_profissional.'", "'.$numero_tel_profissional.'","'.$id_profissional.'")';
        $resultado = mysqli_query($link, $query_telefone);

      

        // cadastrar o endereço, consultar e recuperar o id do endereço cadastrado, fazer update em profissional para add o id do endereço
        $query_endereco ='INSERT INTO endereco_profissional (id_tipo_logradouro, logradouro, cidade, id_estado, bairro, numero_endereco, descricao_endereco, cep, id_profissional)
        VALUES ("'.$tipo_logradouro.'", "'.$logradouro.'","'.$cidade.'","'.$estado.'","'.$bairro.'","'.$num_profissional.'","'.$desc_endereco.'","'.$cep_profissional.'", "'.$id_profissional.'")';
        $resultado = mysqli_query($link, $query_endereco);

        $resultado= mysqli_query($link, $query_rede_social);
        if ($resultado){
               echo "Registrado com sucesso";
           }else{
               echo "Erro ao cadastrar redes sociais:(";
        
        }      
      }else{

        echo "Preencha os campos corretamente!";
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
  }else{
    header('Location: ../index.php');
      
    }


    ?>

    <!--implementação jquery, poppers.js e plugin bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/bootstrap-validate.js"></script>
    <script src="../assets/js/main.js"></script>

   
</body>
    
    <script>
      bootstrapValidate('#telefone-profissional' , 'required:Preencha este campo')
      bootstrapValidate('#ddd-profissional' , 'required:Preencha este campo')
      bootstrapValidate('#CEP_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#logradouro_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#cidade_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#bairro_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#numero_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#complemento_profissional' , 'required:Preencha este campo')
      bootstrapValidate('#bairro_profissional' , 'required:Preencha este campo')
      
      
    </script>

</html>

