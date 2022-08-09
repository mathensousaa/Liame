<!doctype html>
<html lang="pt-br">
  <?php
  session_start();
  if(isset($_SESSION['id_mae'])){
    $id_mae = $_SESSION['id_mae'];
    $id_profissional = 0;
    $id_adm = 0;
  }
  else if(isset($_SESSION['id_profissional'])){
    $id_profissional = $_SESSION['id_profissional'];
    $id_mae = 0;
    $id_adm = 0;
  }
  else if(isset($_SESSION['id_adm'])){
    $id_adm = $_SESSION['id_adm'];
    $id_profissional = 0;
    $id_mae = 0;
  }
  else{
    $id_adm=0;
    $id_profissional = 0;
    $id_mae = 0;
  }?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Privacidade e cookies | Liame</title>

  <!-- CSS -->
  <link rel="stylesheet" href="../assets/css/owl/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/css/owl/owl.theme.default.min.css">
  <link rel="stylesheet" href="../assets/css/main.css">

  <!--favicon-->
  <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-png">

  <!--unicons (icones que serão usados no site)-->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

  <main>
    <?php
  include_once 'menu3.php';
  Menu($id_mae, $id_profissional, $id_adm);
  
  ?>
   
    <!--//navbar-->

  <main class="">
    <div class="container content shadow-lg mb-5">
      <h4 class="mb-4">Privacidade e cookies</h4>


      <h5>Introdução</h5>
      <p>A proteção da privacidade com a utilização do uso legal de dados pessoais é um ponto que Liame
        se preocupa, prezando sempre pela garantia e segurança dos dados e da privacidade de todos os
        nossos usuários. </p>
      <p>Liame, unindo do início ao fim, é uma plataforma que tem como foco levar a informação de
        maneira acessível para mães e gestantes, para isso temos o cadastro de muitos profissionais
        a área para dar todo o suporte necessário, para que possam ser tratadas da maneira mais
        saudável possível, além de disponibilizar um diário de bordo em que é possível fazer a
        partir do primeiro mês de gestação.</p>
    <p> Como zela a Lei Geral de Proteção de Dados 13.709/2018, “Na realização de
        estudos em saúde pública, os órgãos de pesquisa poderão ter acesso a bases de dados
        pessoais, que serão tratados exclusivamente dentro do órgão e estritamente para a
        finalidade de realização de estudos e pesquisas e mantidos em ambiente controlado e
        seguro, conforme práticas de segurança previstas em regulamento específico e que
        incluam, sempre que possível, a anonimização ou pseudonimização dos dados, bem como
        considerem os devidos padrões éticos relacionados a estudos e pesquisas”</p>


      <h5 class="pt-4">Seções específicas do usuário</h5>
      <p>- Se você é um paciente (usuário não profissional da nossa plataforma)</p>
        <p> Se você for um paciente buscando informações e/ou atendimento
            qualificado, é importante criar uma conta na plataforma e logar na mesma,
            caso tenha interesse apenas em armazenar as informações do processo de
            gestação ou da criança, é importante realizar o mesmo passo à passo citado
            anteriormente.</p>


      <h5 class="pt-4">Para obtemos seus dados pessoais</h5>
      <p> Quando você se registra em nossos Serviços, solicitamos que você
        forneça alguns dados básicos, como seu endereço de e-mail. Você também pode se
        registrar usando alguma mídia social como Facebook ou Google: caso essa seja a
        opção escolhhida, você será solicitado a permitir que esses provedores de terceiros
        compartilhem algumas de suas informações pessoais.</p>

        <h5 class="pt-4">Agendar uma consulta com um profissional da área</h5>
         <p> É possível selecionar um profissional da área desejada e ter acesso aos
                dados de contato, desde telefone, e-mail, endereço do local em que trabalha, horários
                de funcionamento, áreas de especialização, se realiza consultas online, entre outras
                informações, tudo isso para que você possa escolher a melhor forma de comunicação.</p>

        <h5 class="pt-4">Adicionando comentário e avaliações</h5>
        <p> Quando uma consulta for finalizada é importante que você faça um
            comentário em ralação a mesma, além de deixar sua nota registrada, para que outras
            pessoas possam consultar esses comentários antes de agendar algo.</p>

            <h5 class="pt-4">Outros dispositivos</h5>
            <p> Quando você utiliza nossos Serviços, podemos obter dados adicionais, incluindo,
                por exemplo: informações sobre seu dispositivo, endereço IP, fuso horário e idioma ou
                navegador. Também temos acesso às informações sobre quando você usou nossos Serviços pela
                primeira e última vez e tempo de uso.
                Você pode nos fornecer dados pessoais de outras pessoas?
                Apenas do bebe ou criança, como por exemplo nome, data de nascimento, entre outros, tudo
                isso para registrar de uma maneira mais completa as informações necessárias.</p>

         <h5 class="pt-4">Seções específicas para especialistas</h5>
         <p><b>Cadastro</b></p>
            <p> Para poder usufruir da plataforma Liame, é importante criar uma conta profissional e
                realizar o pagamento pelo PayPal, basta escolher o melhor plano para você. As informações
                solicitadas são:<br>
                - Nome e sobrenome,<br>
                - Endereço profissional,<br>
                - Endereço de e-mail,<br>
                - Áreas de formação e local de estudo,<br>
                - Número profissional,<br>
                - Foto de perfil,<br>
                - Informação da clínica em que você colabora. <br></p>

        <h5 class="pt-4">Outros dispositivos</h5>
        <p>Quando você utiliza nossos Serviços, podemos obter dados adicionais, incluindo,
            por exemplo: informações sobre seu dispositivo, endereço IP, fuso horário e idioma ou
            navegador. Também temos acesso às informações sobre quando você usou nossos Serviços pela
            primeira e última vez e tempo de uso.
            Você pode nos fornecer dados pessoais de outras pessoas?
            Apenas do bebe ou criança, como por exemplo nome, data de nascimento, entre outros, tudo isso
            ara registrar de uma maneira mais completa as informações necessárias. </p>

            <h5 class="pt-4">Política de Cookies Liame</h5>
            <p>São pequenos arquivos criados por sites visitados e que são salvos no computador do
                usuário, por meio do navegador. Esses arquivos contêm informações que são utilizados
                para identificar o visitante, podendo ser para personalizar a página de acordo com o
                perfil ou para facilitar o deslocamento de dados entre as páginas de um mesmo site.</p>
                <br>
          </div>
  </main>

  <footer>
    <div id="rodape" class="container">
      <div class="conteudo py-5">
        <div class="row">
          <div class="logo col-md-2">
            <img id="logo" class="img-fluid" src="../assets/img/logo_liame.png" alt="">
          </div>
          <div class="py-lg-0 py-mb-5 col-md-8 d-flex justify-content-center align-self-center">
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Mães</h5>
              <ul class="list-unstyled">
                <li class=""><a href="../php/procura_profissional1.php">Consultas</a></li>
                <li class=""><a href="../php/diario_bordo.php">Diário de bordo</a></li>
                <li class=""><a href="../php/carteirinha_vacinacao.php">Carteira de vacinação</a></li>
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Especialistas</h5>
              <ul class="list-unstyled">
                <li class=""><a href="central_ajuda.php">Central de ajuda</a></li>
                <li class=""><a href="termos_uso_profissional.php">Termos de uso de profissional</a></li>
              </ul>
            </div>
            <div class="px-lg-4 px-mb-1">
              <h5 class="text-uppercase">Serviços</h5>
              <ul class="list-unstyled">
                <li class="list-item"><a href="quem_somos.php">Quem somos</a></li>
                <li class=""><a href="../php/contato.php">Contato</a></li>
                <li class=""><a href="privacidade_cookies.php">Privacidade e cookies</a></li>
                <li class=""><a href="termos_condicoes_uso.php">Termos e condições de uso</a></li>
              </ul>
            </div>
          </div>
          <div class="social col-md-2">
            <ul>
              <li>
                <a href="https://www.instagram.com/projeto_liame/">
                <img src="../assets/img/instagram.svg" alt="Icone Instagram">
                </a>
              </li>
              <li>
                <a href="https://www.facebook.com/Liame-unindo-do-início-ao-fim-103264221864132">
                <img src="../assets/img/facebook.svg" alt="Icone Facebook">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js" integrity="sha512-yDlE7vpGDP7o2eftkCiPZ+yuUyEcaBwoJoIhdXv71KZWugFqEphIS3PU60lEkFaz8RxaVsMpSvQxMBaKVwA5xg==" crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>

</html>
