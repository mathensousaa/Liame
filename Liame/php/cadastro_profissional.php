



<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Liame - Unindo do início ao fim.</title>

  <!--implementação bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


  <!--css-->
  <link rel="stylesheet" href="../assets/css/styles.css">

  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body class="fundo">

  <!--cabeçalho-->
  <header class="cabecalho cabecalho-2">
    <div class="container-fluid" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar">

        <!--logo-->
        <a href="../index.php" class="navbar-brand ms-5">
          <img class="logo" src="../assets/img/logo-liame-branca.png" alt="Liame">
        </a>
        <!--botão para menu hamburguer mobile-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
          <span class="uil uil-bars"></span>
        </button>
        <!--link cabeçalho-->
        <div class="collapse navbar-collapse" id="linksnavbar">
          <div class="navbar-nav navbar-collapse justify-content-center">
            <a class="nav-item nav-link" id="consultas-menu" href="esqpecialistas.php">Consultas</a>
            <a class="nav-item nav-link" id="diário-de-bordo-menu" href="diario_bordo.php">Diário de Bordo</a>
            <a class="nav-item nav-link" id="quem-somos-menu" href="../layouts/quem_somos.html">Quem Somos</a>
            <a class="nav-item nav-link" id="planos-menu" href="planos.php">Planos para Especialistas</a>
          </div>
          <!--entrar/cadastro-->
          <div id="login" class="nav navbar-nav me-5">
            <div class="nav-item">
              <a class="nav-item nav-link" href="login.php">
                <i class="uil uil-user"></i>
                Entrar
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>


  <div class="container formulario">
    <div class="estrutura">
      <div class="registro text-center p-5">
        <h1>Criar conta</h1>
      </div>
      <div class="barra-progresso pb-5 text-center">
      <div class="row">
        <div class="step col-4">
          <p>Nome</p>
          <div class="bullet text-center">
            <span>1</span>
          </div>
          <div class="check">
            <i class="uil uil-check"></i>
          </div>
        </div>
        <div class="step col-4">
          <p>Usuário</p>
          <div class="bullet">
            <span>2</span>
          </div>
          <div class="check">
            <i class="uil uil-check"></i>
          </div>
        </div>
        <div class="step col-4">
          <p>Login</p>
          <div class="bullet">
            <span>3</span>
          </div>
          <div class="check">
            <i class="uil uil-check"></i>
          </div>
        </div>
      </div>
    </div>
      <form class="" action="cadastro_profissional.php" method="post">
        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Informações básicas</h4>
          </div>
          <div class="form-group pb-2">
            <label for="nome_profissional">Nome</label>
            <input type="text" name="nome_profissional" id="nome_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group pb-2">
            <label for="foto_perfil_profissional">Foto de perfil</label>
            <input type="file" name="foto_perfil_profissional" id="foto_perfil_profissional" class="form-control form-control-lg">
          </div>
          <div class="d-flex">
            <button class="nextBtn m-1 btn btn-1">Próximo</button>
          </div>
          <div class="text-center mt-3">
            <small>Já tem uma conta?<a class="ms-1" href="login.php">Entrar</a></small>
          </div>
        </div>


        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Informações de contato</h4>
          </div>
          <!--<div class="form-group pb-2">
            <label for="telefone_profissional">Telefone</label>
            <input type="text" name="telefone_profissional" id="telefone_profissional" class="form-control form-control-lg">
          </div>-->
          <div class="row pb-2">
            <div class="form-group ps-0 col-4">
              <label for="cep_profissional">CEP</label>
              <input type="text" name="cep_profissional" id="cep_profissional" class="form-control form-control-lg">
            </div>
            <div class="form-group pe-0 col-8">
              <label for="endereco_profissional">Endereço</label>
              <input type="text" name="endereco_profissional" id="logradouro_profissional" class="form-control form-control-lg">
            </div>

            <div class="form-group pe-0 col-12>
              <label for="logradouro_profissional">Logradouro</label>
              <input type="text" name="logradouro_profissional" id="logradouro_profissional" class="form-control form-control-lg">
            </div>
          </div>
          <div class="d-flex">
            <button class="prev-1 col-6 m-1 btn btn-1">Voltar</button>
            <button class="next-1 col-6 m-1 btn btn-1">Próximo</button>
          </div>
        </div>


        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Informações de contato</h4>
          </div>
        <div class="row pb-2">
          <div class="form-group ps-0 col-3">
<<<<<<< HEAD
            <label for="numero_profissional">Número</label>
            <input type="text" name="numero_endereco_profissional" id="numero_endereco_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group pe-0 col-9">
=======
            <label for="numero_endereco_profissional">Número</label>
            <input type="text" name="numero_endereco_profissional" id="numero_endereco_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group ps-0 pe-0">
>>>>>>> 85cd193d456db9e8574abcc04bbf6ecdc313a308
            <label for="bairro_profissional">Bairro</label>
            <input type="text" name="bairro_profissional" id="bairro_profissional" class="form-control form-control-lg">
          </div>
        </div>
        <div class="row pb-2">
          <div class="form-group ps-0 col-8">
            <label for="cidade_profissional">Cidade</label>
            <input type="text" name="cidade_profissional" id="cidade_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group pe-0 col-4">
            <label for="estado_profissional">UF</label>
            <input type="text" name="estado_profissional" id="estado_profissional" class="form-control form-control-lg">
          </div>
        </div>
        <div class="d-flex">
          <button class="prev-2 col-6 m-1 btn btn-1">Voltar</button>
          <button class="next-2 col-6 m-1 btn btn-1">Próximo</button>
        </div>
      </div>


        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Informações profissionais</h4>
          </div>
          <!--<div class="form-group pb-2">
            <label for="servico">Serviço</label>
            <input type="text" name="servico_profissional" id="servico" class="form-control form-control-lg">
          </div>-->
          <div class="form-group pb-2">
            <label for="numero_registro_profissional">Número de registro</label>
            <input type="text" name="numero_registro_profissional" id="numero_registro_profissional" class="form-control form-control-lg">
          </div>
          <div class="d-flex">
            <button class="prev-3 col-6 m-1 btn btn-1">Voltar</button>
            <button class="next-3 btn col-6 m-1 btn-1">Próximo</button>
          </div>
        </div>



        <div class="page slidepage col-12">
          <div class="pb-3">
            <h4>Detalhes de login</h4>
          </div>
          <div class="form-group pb-2">
            <label for="email_profissional">E-mail</label>
            <input type="email" name="email_profissional" id="email_profissional" class="form-control form-control-lg">
          </div>
          <div class="row pb-2">
          <div class="form-group col-6 ps-0">
            <label for="senha_mae">Senha</label>
            <input type="password" name="senha_profissional" id="senha_profissional" class="form-control form-control-lg" placeholder="8 dígitos">
          </div>
          <div class="form-group col-6 pe-0">
            <label for="confirmarsenha_mae">Confirmar senha</label>
            <input type="password" name="confirmarsenha_profissional" id="confirmarsenha_profissional" class="form-control form-control-lg">
          </div>
          </div>

          <div class="d-flex">
            <button class="prev-4 col-6 m-1 btn btn-1">Voltar</button>
            <input class="submit col-6 m-1 btn btn-1" type="submit" name="enviar" value="Enviar">
          </div>
        </div>

      </form>
    </div>

  </div>


  <!--implementação jquery, poppers.js e plugin bootstrap-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="../assets/js/scripts.js"></script>

  <!--progressbar-->
  <script src="../assets/js/progressbar.min.js"></script>

  <!--biblioteca parallax-->
  <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>


  <?php

      // iniciando as variaveis e conectando ao banco

      include 'conexao.php';

        // registrando

        if(isset($_POST['enviar'])){

        $nome_profissional = $_POST['nome_profissional'];
        $telefone_profissional = $_POST['telefone_profissional'];
        $cep_profissional = $_POST['cep_profissional'];
        $endereco_profissional = $_POST['endereco_profissional'];
        $numero_endereco_profissional = $_POST['numero_endereco_profissional'];
        $bairro_profissional = $_POST['bairro_profissional'];
        $cidade_profissional = $_POST['cidade_profissional'];
        $estado_profissional = $_POST['estado_profissional'];
        $servico_profissional = $_POST['servico_profissional'];
        $numero_registro_profissional = $_POST['numero_registro_profissional'];
        $email_profissional = $_POST['email_profissional'];
        $foto_perfil_profissional = $_POST['foto_perfil_profissional'];
        $senha_profissional = $_POST['senha_profissional'];
        $confirmarsenha_profissional = $_POST['confirmarsenha_profissional'];
<<<<<<< HEAD
        $status_profissional = $_POST['status_profissional'];
=======
>>>>>>> 85cd193d456db9e8574abcc04bbf6ecdc313a308
        
      









        // validacao do formulario



        if($confirmarsenha_profissional != $senha_profissional){

          array_push($erro, "Senhas precisam ser iguais");

        }

        //checando se o usuario e a senha ja existem

        $user_check_query = "SELECT * FROM profissional WHERE email_profissional = '$email_profissional'";
        $resultado = mysqli_query($link, $user_check_query);
        $conta = mysqli_num_rows($resultado);

        if($conta>1){
          echo "Esse email já está em uso";
        }else{
          $senha = md5($senha_profissional);
<<<<<<< HEAD
          $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional, foto_perfil_profissional, numero_registro_profissional, logradouro_profissional , numero_endereco_profissional, bairro_profissional, cidade_profissional, estado_profissional, cep_profissional, telefone_profissional, sobre_mim_profissional, status_profissional) VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_profissional.'", "'.$foto_perfil_profissional.'", "'.$numero_registro_profissional.'", "'.$endereco_profissional.'", $numero_endereco_profissional, "'.$bairro_profissional.'", "'.$cidade_profissional.'", "'.$estado_profissional.'", "'.$cep_profissional.'", "'.$telefone_profissional.'", "'.$servico_profissional.'","'.$status_profissional.'")';
=======
          $query = 'INSERT INTO profissional (nome_profissional, email_profissional, senha_profissional, foto_perfil_profissional, numero_registro_profissional, logradouro_profissional , numero_endereco_profissional ,bairro_profissional, cidade_profissional, estado_profissional, cep_profissional, telefone_profissional, sobre_mim_profissional) VALUES ("'.$nome_profissional.'", "'.$email_profissional.'", "'.$senha_profissional.'", "'.$foto_perfil_profissional.'", "'.$numero_registro_profissional.'", "'.$endereco_profissional.'", "'.$numero_endereco_profissional.'", "'.$bairro_profissional.'", "'.$cidade_profissional.'", "'.$estado_profissional.'", "'.$cep_profissional.'", "'.$telefone_profissional.'", "'.$servico_profissional.'")';
>>>>>>> 85cd193d456db9e8574abcc04bbf6ecdc313a308
  
          $inserir = mysqli_query($link, $query);
          if($inserir==0){
              echo "ERRO ao cadastrar";

          }else{
           $_SESSION['email_profissional'] = $email_profissional;
           $_SESSION['nome_profissional'] = $nome_profissional;
          }
        }
          }

    ?>


</body>

</html>
