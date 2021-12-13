<?php
   /* echo "página do diário de bordo";
    if (!isset($_SESSION)) {//Verificar se a sessão não já está aberta.
        session_start();
      }
    
    //check do the person logged in
    if($_SESSION['email_mae']==NULL){
        //haven't log in
        echo "Você não está logado";
    }else{
        //Logged in
        echo "Bem-vindo " . $_SESSION['email_mae'];*/
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


<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Diario de bordo | Liame</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">

  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- tinymce -->

   <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  
   <script>tinymce.init({selector:'textarea'});</script>

   <style>
		:root {
			--header-height: 3rem;
			--nav-width: 68px;
			--white-color: #F7F6FB;
			--normal-font-size: 1rem;
			--z-fixed: 100
		}

		*,
		::before,
		::after {
			box-sizing: border-box
		}

		body {
			position: relative;
			margin: var(--header-height) 0 0 0;
			padding: 0 1rem;
			font-size: var(--normal-font-size);
			transition: .5s;
            padding-bottom: 50px;
            background-color: #f8f9fa;
		}

		a {
			text-decoration: none
		}

		.header {
			width: 100%;
			height: var(--header-height);
			position: fixed;
			top: 0;
			left: 0;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 0 1rem;
			background-color: var(--white-color);
			z-index: var(--z-fixed);
			transition: .5s
		}

		.header_toggle {
			color: var(--tertiary);
			font-size: 1.5rem;
			cursor: pointer
		}

		.header_img {
			width: 35px;
			height: 35px;
			display: flex;
			justify-content: center;
			border-radius: 50%;
			overflow: hidden
		}

		.header_img img {
			width: 40px
		}

		.l-navbar {
			position: fixed;
			top: 0;
			left: -30%;
			width: var(--nav-width);
			height: 100vh;
			background-color: var(--tertiary);
			padding: .5rem 1rem 0 0;
			transition: .5s;
			z-index: var(--z-fixed)
		}

        .nav_logo img {
            width: 1.5rem;;
        }

		.nav {
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			overflow: hidden
		}

		.nav_logo,
		.nav_link {
			display: grid;
			grid-template-columns: max-content max-content;
			align-items: center;
			column-gap: 1rem;
			padding: .5rem 0 .5rem 1.5rem
		}

		.nav_logo {
			margin-bottom: 2rem
		}

		.nav_logo-icon {
			font-size: 1.25rem;
			color: var(--white-color)
		}

		.nav_logo-name {
			color: var(--white-color);
			font-weight: 700
		}

		.nav_link {
			position: relative;
			color: var(--tertiary-light);
			margin-bottom: 1.5rem;
			transition: .3s
		}

		.nav_link:hover {
			color: var(--white-color)
		}

		.nav_icon {
			font-size: 1.25rem
		}

		.show {
			left: 0
		}

		.body-pd {
			padding-left: calc(var(--nav-width) + 1rem);
            background-color: #f8f9fa;
		}

		.active {
			color: var(--white-color)
		}

		.active::before {
			content: '';
			position: absolute;
			left: 0;
			width: 2px;
			height: 32px;
			background-color: var(--white-color)
		}

		.height-100 {
			height: 100vh
		}

		@media screen and (min-width: 768px) {
			body {
				margin: calc(var(--header-height) + 1rem) 0 0 0;
				padding-left: calc(var(--nav-width) + 2rem)
			}

			.header {
				height: calc(var(--header-height) + 1rem);
				padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
			}

			.header_img {
				width: 40px;
				height: 40px
			}

			.header_img img {
				width: 45px
			}

			.l-navbar {
				left: 0;
				padding: 1rem 1rem 0 0
			}

			.show {
				width: calc(var(--nav-width) + 156px)
			}

			.body-pd {
				padding-left: calc(var(--nav-width) + 188px)
			}
		}
	</style>    
</head>

<body id="body-pd" class="px-0">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='uil uil-bars' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> 
                <a href="../index.php" class="nav_logo"> 
                    <img src="../assets/img/logo-liame-branca.png" alt=""> 
                </a>
                <div class="nav_list">
                    <a href="perfil_profissional1.php" class="nav_link active">
                        <i class='uil uil-user-circle nav_icon'></i>
                        <span class="nav_name">Meu Perfil</span>
                    </a> 
                </div>
            </div> 
            <a href="logout_profissional.php" class="nav_link"> 
                <i class='uil uil-signout nav_icon'></i>
                <span class="nav_name">Sair</span>
            </a>
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light">
      <main>
        <form name="confgconta" action="#" method="POST">
          <div class="container" id="container-input">
            <div class="pt-5">
            <div class="d-flex justify-content-center" id="avatar-container">
              <img class="imagem-mae" src="../assets/img/user.svg">
              <div class="botao-upload">
                <i class="uil uil-arrow-up" aria-hidden="true"></i>
              </div>
              <input type="file" accept=".png, .jpg, .jpeg" name="foto_perfil_profissional" id="avatar-input" class="avatar-input">
            </div>
            <h6 class="text-center">
            <?php
              echo $_SESSION['nome_profissional'];
            ?>
            </h6>
            </div>
          </div>
          <div class="container pb-5">
            <div class="pt-4" id="dados-pessoais">
              <div class="row text-center">
                <h2 class="">Contato</h2>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-1">
                  <label for="ddd_profissional" class="form-label">DDD</label>
                  <input type="text" class="form-control" name="ddd_profissional" id="ddd_profissional" placeholder="">
                </div>
                <div class="col-6">
                  <label for="telefone-profissional" class="form-label">Telefone</label>
                  <input type="text" class="form-control" name="telefone-profissional" id="telefone-profissional" placeholder="">
                </div>
              </div>


              <div class="row text-center">
                <h2 class="">Redes Sociais</h2>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Youtube</span>
                    </div>
                <input name="youtube_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Whatsapp</span>
                    </div>
                <input name="Whatsapp_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                </div>  
                <div class="row d-flex justify-content-center">
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Instagram</span>
                    </div>
                <input name="Instagram_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Linkedin</span>
                    </div>
                <input name="Linkedin_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                </div>

                <div class="row d-flex justify-content-center">
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Facebook</span>
                    </div>
                <input name="Facebook_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                
                <div class="col-4">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Telegram</span>
                    </div>
                <input name="Telegram_profissional" type="text" class="form-control" placeholder="Link" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                </div>
                </div>


                <div class="row text-center">
                <h2 class="">Endereço</h2>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-2">
                  <label for="CEP_profissional" class="form-label">CEP</label>
                  <input type="text" class="form-control" name="CEP_profissional" id="ddd_profissional" placeholder="01234-567">
                </div>
                <div class="col-6">
                  <label for="tipo-logradouro" class="form-label">Tipo de logradouro</label>
                  <select type="select" class="form-select" name="telefone-profissional" id="select-busca1">
                        <option selected disabled>Selecione </option>
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
                </div>

                <div class="row d-flex justify-content-center">
                <div class="col-6">
                  <label for="logradouro-profissional" class="form-label">Logradouro</label>
                  <input type="text" class="form-control" name="logradouro-profissional" id="logradouro-profissional" placeholder="Insira seu endereço">
                </div>
                <div class="col-2">
                  <label for="estado" class="form-label">Estado</label>
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
                </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-3">
                    <label for="Cidade_profissional" class="form-label">Cidade</label>
                    <input type="text" class="form-control" name="Cidade_profissional" id="cidade_profissional" placeholder="Insira sua cidade">
                    </div>
                    <div class="col-2">
                    <label for="estado" class="form-label">Estado</label>
                    <input type="text" class="form-control" name="Bairro_profissional" id="bairro_profissional" placeholder="Insira seu Bairro">
                    </div>
                    <div class="col-1">
                    <label for="Numero_profissional" class="form-label">Número</label>
                    <input type="text" class="form-control" name="Numero_profissional" id="numero_profissional" placeholder="Nº">
                    </div>
                    <div class="col-2">
                    <label for="Complemento_profissional" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="Complemento_profissional" id="complemento_profissional" placeholder="">
                    </div>
                </div>

                <div class="pt-5 row text-center">
                <h2 class="">Documentação</h2>
                <p>Insirir sua documentação com suas informaões de formação profissional</p>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-6">
                <label for="doc_profissional" class="form-label">Documento</label>
                <input class="form-control" accept="application/pdf" type="file" id="formFile" name="doc_profissional">
                </div>
              </div>
              <div class="pt-2 row text-center">
                  <div>
                <input class="btn btn-primary button-primary button"type="submit" name="salvar" value="Salvar">
                </div>
              </div>
             </div>
            </div>
                
                
              </div>
            </div>
          </div>
        </form>

        <!--<div class="container pt-3">
          <div class="row text-center">
            <h2 class="">Dados do bebê</h2>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-4">
              <label for="nome-bebe" class="form-label">Nome do seu filho</label>
              <input type="text" class="form-control" name="nome-bebe" id="nome-bebe" placeholder="<?php /*echo $_SESSION['nome_bebe']; */?>" required>
            </div>
            <div class="col-4">
              <label for="exibir" class="form-label">Não sei pra que serve esse botao</label>
              <input class="btn btn-primary button button-primary" type= "submit" name="exibir" value="Exibir bebês cadastrados">
            </div>
          </div>
        </div>

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


   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="../assets/js/owl.carousel.min.js"></script>
	<script src="../assets/js/main.js"></script>
  <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd  ){
                    toggle.addEventListener('click', ()=>{
                    // show navbar
                    nav.classList.toggle('show')
                    // change icon
                    toggle.classList.toggle('bx-x')
                    // add padding to body
                    bodypd.classList.toggle('body-pd')
                    // add padding to header
                    headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle','nav-bar','body-pd','header')

            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink(){
            if(linkColor){
            linkColor.forEach(l=> l.classList.remove('active'))
            this.classList.add('active')
            }
            }
            linkColor.forEach(l=> l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
  </script>
  <script>
      $(document).ready(function() {

        var readURL = function(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                  $('.imagem-mae').attr('src', e.target.result);
              }

              reader.readAsDataURL(input.files[0]);
          }
        }

        $(".avatar-input").on('change', function(){
            readURL(this);
        });

        $(".botao-upload").on('click', function() {
          $(".avatar-input").click();
        });
    });
  </script>
  <script>
			bootstrapValidate('#nome-bebe' , 'required:Preencha este campo')
	</script>
<?php
}else{
  header('Location: login_mae.php');

  }

  ?>
</body>
		
</html>