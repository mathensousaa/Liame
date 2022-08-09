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
        if(isset($_SESSION['id_adm'])){
         $id_adm = $_SESSION['id_adm'];
       
       }else{
         $id_adm=0;
       }
        
        if(($id_mae != 0)){
         
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
			transition: .5s
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
			padding-left: calc(var(--nav-width) + 1rem)
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
                    <a href="diario_bordo.php" class="nav_link">
                        <i class='uil uil-file-plus nav_icon'></i>
                        <span class="nav_name">Nova anotação</span>
                    </a>
                    <a href="exibe_diario.php" class="nav_link">
                        <i class='uil uil-diary nav_icon'></i>
                        <span class="nav_name">Minhas anotações</span>
                    </a>
                    <a href="carteirinha_vacinacao.php" class="nav_link">
                        <i class='uil uil-syringe nav_icon'></i>
                        <span class="nav_name">Vacinas</span> 
                    </a> 
                    <a href="perfil_mae.php" class="nav_link active">
                        <i class='uil uil-user-circle nav_icon'></i>
                        <span class="nav_name">Meu Perfil</span>
                    </a> 
                </div>
            </div> 
            <a href="logout_mae.php" class="nav_link"> 
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
              <input type="file" accept=".png, .jpg, .jpeg" name="imagem-mae" id="avatar-input" class="avatar-input">
            </div>
            <h6 class="text-center">
            <?php
              echo $_SESSION['nome_mae'];
            ?>
            </h6>
            </div>
          </div>
          <div class="container">
            <div class="pt-4" id="dados-pessoais">
              <div class="row text-center">
                <h2 class="">Dados Pessoais</h2>
              </div>
              <div class="row d-flex justify-content-center">
                <div class="col-4">
                  <label for="nome-mae" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="nome-mae" id="nome-mae" placeholder="<?php echo $_SESSION['nome_mae']; ?> ">
                </div>
                <div class="col-4">
                  <label for="email-mae" class="form-label">E-mail</label>
                  <input type="text" class="form-control" name="email-mae" id="email-mae" placeholder="<?php echo $_SESSION['email_mae']; ?>">
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <input class="btn btn-primary button button-primary" type="submit" name= "editar" value="Salvar">
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

        <?php
          if(isset ($_POST['editar'])){
            $foto_perfil_mae = $_POST['imagem-mae'];
            $alterar_nome_mae = $_POST ['nome-mae'];
            $alterar_email_mae = $_POST['email-mae'];
            
            $query = ("UPDATE mae SET foto_perfil_mae ='$foto_perfil_mae', nome_mae='$alterar_nome_mae',email_mae='$alterar_email_mae' where id_mae = $id_mae'");

          //echo $sql;

            if(mysqli_query($link,$query)){
              echo "Atualizado com sucesso!";
            }else{
              echo "Erro ao gravar!";
            }
          }
        ?>

        <?php
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
          }

          if(isset($_POST['submit2'])){

          $nome_bebe = $_POST['nome_bebe'];
          $query2 = 'INSERT into bebe (nome_bebe, id_mae) values("'.$nome_bebe.'", "'.$id.'")';


          if(mysqli_query($link,$query2)){
            echo "Gravado com sucesso!";
          }else{
            echo "Erro ao gravar!";
          }
          }

          $query ="SELECT id_bebe, nome_bebe FROM bebe WHERE id_mae = '$id'";
          $dados = mysqli_query($link, $query);
          /*$linha = mysqli_fetch_assoc($dados);
          $total = mysqli_num_rows($dados);
          echo $total;*/
        ?>
          <?php
        if (isset($_POST['exibir'])){

          while($row = mysqli_fetch_array($dados)){
          echo "<table>";

          echo "<td>" . $row['nome_bebe'] . "</td>";

          ?>
          <input type="submit" name="editar" value ="Editar">
          <input type="submit" name="excluir" value ="Excluir"></td>
        <?php
          }

          echo "</table>";

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
        }
          ?>


        </div>
      </main>
	  </div>
  </div>
    <!--Container Main end-->

   
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