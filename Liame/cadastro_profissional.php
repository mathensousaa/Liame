<?php
    include 'php/registro_profissional.php';

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Liame - Unindo do início ao fim.</title>

  <!--implementação bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--css-->
  <link rel="stylesheet" href="assets/css/styles.css">

  <!--favicon-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


</head>

<body class="fundo">

  <!--cabeçalho-->
  <header class="cabecalho cabecalho-2">
    <div class="container-fluid" id="nav-container">
      <nav class="navbar navbar-expand-lg navbar-light flex-md-row bd-navbar">

        <!--logo-->
        <a href="index.php" class="navbar-brand ms-5">
          <img class="logo" src="assets\img\logo-liame-branca.png" alt="Liame">
        </a>
        <!--botão para menu hamburguer mobile-->
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target-"#linksnavbar" aria-controls="liksnavbar" aria-expanded="false" aria-label="toggle">
          <span class="uil uil-bars"></span>
        </button>
        <!--link cabeçalho-->
        <div class="collapse navbar-collapse" id="linksnavbar">
          <div class="navbar-nav navbar-collapse justify-content-center">
            <a class="nav-item nav-link" id="especialistas-menu" href="php/especialistas.php">Especialistas</a>
            <a class="nav-item nav-link" id="consultas-menu" href="php/consultas.php">Consultas</a>
            <a class="nav-item nav-link" id="diário-de-bordo-menu" href="php/diario-de-bordo.php">Diário de Bordo</a>
            <a class="nav-item nav-link" id="quem-somos-menu" href="php/especialistas.php">Quem Somos</a>
            <a class="nav-item nav-link" id="planos-menu" href="php/planos.php">Planos para Especialistas</a>
          </div>
          <!--entrar/cadastro-->
          <div id="login" class="nav navbar-nav mr-5">
            <div class="nav-item">
              <a class="nav-item nav-link" href="layouts/entrar.html">
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
      <div class="justify-content-center barra-progesso pb-5 text-center">
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
<<<<<<< HEAD
      <form class="" action="php/conexao_profissional.php" method="post">
=======
      <form class="" action="registro_profissional.php" method="post">
>>>>>>> 7843dee2e693804d3a4547a8dbc13ec3c6df79d2
        <div class="col-12">
          <div class="pb-3">
            <h4>Informações básicas</h4>
          </div>
          <div class="form-group pb-2">
            <label for="nome_profissional">Nome</label>
            <input type="text" name="nome_profissional " id="nome_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group pb-2">
            <label for="sobrenome_profissional">Sobrenome</label>
            <input type="text" name="sobrenome_profissional " id="sobrenome_profissional" class="form-control form-control-lg">
          </div>
          <div class="d-flex">
            <a href="" class="col-6 m-1 btn btn-1">Voltar</a>
            <a href="" class="col-6 m-1 btn btn-1">Próximo</a>
          </div>
        </div>


        <div class="col-12">
          <div class="pb-3">
            <h4>Informações de contato</h4>
          </div>
          <div class="form-group pb-2">
            <label for="telefone_profissional">Telefone</label>
            <input type="text" name="telefone_profissional " id="telefone_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-row pb-2">
            <div class="form-group col-4">
              <label for="cep_profissional">CEP</label>
              <input type="text" name="cep_profissional " id="cep_profissional" class="form-control form-control-lg">
            </div>
            <div class="form-group col-8">
              <label for="logradouro_profissional">Endereço</label>
              <input type="text" name="endereco_profissional " id="logradouro_profissional" class="form-control form-control-lg">
            </div>
          </div>
          <div class="form-row pb-2">
            <div class="form-group col-3">
              <label for="numero_profissional">Número</label>
              <input type="number" min="0" name="numero_endereco_profissional " id="numero_profissional" class="form-control form-control-lg">
            </div>
            <div class="form-group col-9">
              <label for="bairro_profissional">Bairro</label>
              <input type="text" name="bairro_profissional" id="bairro_profissional" class="form-control form-control-lg">
            </div>
          </div>
          <div class="form-row pb-2">
            <div class="form-group col-8">
              <label for="cidade_profissional">Cidade</label>
              <input type="text" name="cidade_profissional" id="cidade_profissional" class="form-control form-control-lg">
            </div>
            <div class="form-group col-4">
              <label for="estado_profissional">UF</label>
              <input type="" name="estado_profissional" id="estado_profissional" class="form-control form-control-lg">
            </div>
          </div>
          <div class="d-flex">
            <a href="" class="col-6 m-1 btn btn-1">Voltar</a>
            <a href="" class="col-6 m-1 btn btn-1">Próximo</a>
          </div>
        </div>



        <div class="col-12">
          <div class="pb-3">
            <h4>Informações profissionais</h4>
          </div>
          <div class="form-group pb-2">
            <label for="servico">Serviço</label>
            <input type="text" name="servico_profissional " id="servico" class="form-control form-control-lg">
          </div>
          <div class="form-group pb-2">
            <label for="numero_registro_profissional">Número de registro</label>
            <input type="text" name="numero_registro_profissional " id="numero_registro_profissional" class="form-control form-control-lg">
          </div>
          <div class="d-flex">
            <a href="" class="col-6 m-1 btn btn-1">Voltar</a>
            <a href="" class="col-6 m-1 btn btn-1">Próximo</a>
          </div>
        </div>



        <div class="col-12">
          <div class="pb-3">
            <h4>Detalhes de login</h4>
          </div>
          <div class="form-group pb-2">
            <label for="email_profissional">E-mail</label>
            <input type="email" name="email_profissional" id="email_profissional" class="form-control form-control-lg">
          </div>
          <div class="form-group pb-2">
            <label for="foto_perfil_profissional">Foto de perfil</label>
            <input type="file" name="foto_perfil_profissional" id="foto_perfil_profissional" class="form-control-file">
          </div>

          <div class="d-flex">
            <a href="" class="col-6 m-1 btn btn-1">Voltar</a>
            <a href="" class="col-6 m-1 btn btn-1">Próximo</a>
          </div>
        </div>

        <div class="col-12">
          <div class="pb-3">
            <h4>Escolher senha</h4>
          </div>
          <div class="form-group pb-2">
            <label for="senha_mae">Senha</label>
            <input type="password" name="senha_profissional " id="senha_profissional" class="form-control form-control-lg" placeholder="8 dígitos">
          </div>
          <div class="form-group pb-2">
            <label for="confirmarsenha_mae">Confirmar senha</label>
            <input type="password" name="confirmarsenha_profissional " id="confirmarsenha_profissional" class="form-control form-control-lg">
          </div>

          <div class="d-flex">
            <a href="" class="col-6 m-1 btn btn-1">Voltar</a>
            <a href="" class="col-6 m-1 btn btn-1">Próximo</a>
          </div>
        </div>

      </form>
    </div>

  </div>
</body>

</html>

<?php
    include 'conexao.php';

    $nome_profissional = ($_POST['nome_profissional']);
    $sobrenome_profissional = ($_POST['sobrenome_profissional']);
    $email_profissional = ($_POST['email_profissional']);
    $senha_profissional = ($_POST['senha_profissional']);
    $confirmarsenha_profissonal = ($_POST['confirmarsenha_profissional']);
    $foto_perfil_profissional = ($_POST['foto_perfil_profissional']);
    $numero_registro_profissional = ($_POST['numero_registro_profissional']);
    $servico_profissional = ($_POST['servico_profissional']);
    $logradouro_profissional = ($_POST['logradouro_profissional']);
    $numero_endereco_profissional = ($_POST['numero_endereco_profissional']);
    $bairro_profissional = ($_POST['bairro_profissional']);
    $cidade_profissional = ($_POST['cidade_profissional']);
    $estado_profissional = ($_POST['estado_profissional']);
    $cep_profissional = ($_POST['cep_profissional']);

   if($confirmarsenha_profissional == $senha_profissional){
    echo "Senhas iguais";
   }else{
       echo "Senhas diferentes";
   }

    $query = "INSERT INTO 'mae' ( 'nome_mae' , 'sobrenome_mae' , 'apelido_mae' , 'email_mae' , 'senha_mae' , 'foto_perfil_mae') VALUES ('$nome_mae', '$sobrenome_mae', '$apelido_mae', '$email_mae', '$senha_mae', '$foto_perfil_mae')";
    mysqli_query($link,$query) or die("Erro ao cadastrar");

    echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";




?>


<!--
<div class="card text-center justify-content-center shadow-lg card-1 border-0 bg-white px-sm-2">
  <div class="card-body show ">
    <div class="row">
      <div class="col">
        <h5>Selecione o tipo de conta</h5>
      </div>
    </div>
    <div class="radio-group row justify-content-between px-3 text-center a">
      <div class="col-auto mr-sm-2 mx-1 card-block py-0 text-center radio selected">
        <div class="flex-row">
          <div class="col">
            <div class="icone">
              <img class="irc_mut img-fluid" src="assets\img\mae-icone.png" alt="ícone de mãe" width="100" height="100">
              <p>Mãe</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-auto ml-sm-2 mx-1 card-block py-0 text-center radio">
        <div class="flex-row">
          <div class="col">
            <div class="icone">
              <img class="irc_mut img-fluid" src="assets\img\doutor-icone.png" alt="ícone de médico" width="100" height="100">
              <p>Profissional</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
-->
