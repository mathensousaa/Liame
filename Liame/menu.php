<!--navbar-->
<?php 
    function Menu($id){
        if(isset($id)){

?>
<div id="header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
              <img class="img-fluid" id="logo" src="assets/img/logo_liame.png" alt="Liame">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/procura_profissional1.php">Buscar especialistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/diario_bordo.php">Diário de Bordo</a>
                </li>
              </ul>
              <!--entrar/cadastro-->
              <div id="login" class="nav navbar-nav">
                <div class="nav-item">
                  
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Quem você é?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body container-fluid block">
                          <div class="container my-4">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login_profissional.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Medico_home.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Especialista</h5>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login_mae.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Vaccine.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Mãe</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </nav>
      </div>

    </div>
    <!--//navbar-->
    <?php
            }
            else{
    ?>
    <div id="header" class="fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
          <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
              <img class="img-fluid" id="logo" src="assets/img/logo_liame.png" alt="Liame">
            </a>

            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/procura_profissional1.php">Buscar especialistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="php/diario_bordo.php">Diário de Bordo</a>
                </li>
              </ul>
              <!--entrar/cadastro-->
              <div id="login" class="nav navbar-nav">
                <div class="nav-item">
                  <button type="button" class="button button-primary btn btn-outline-primarynav-item " data-bs-toggle="modal" data-bs-target="#modal-login">
                    Entrar
                  </button>
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Quem você é?</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body container-fluid block">
                          <div class="container my-4">
                            <div class="row">
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login_profissional.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Medico_home.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Especialista</h5>
                                  </div>
                                </a>
                              </div>
                              <div class="col-lg-6 col-md-6 mb-4 mb-lg-0">
                                <a href="php/login_mae.php" class="destaque">
                                  <div class="img-container mb-3">
                                    <img class="img-fluid" src="assets/img/Vaccine.png" alt="">
                                  </div>
                                  <div class="text-container">
                                    <h5>Mãe</h5>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </nav>
      </div>

    </div>
    <!--//navbar-->
    <?php
            }
        } 
    ?>