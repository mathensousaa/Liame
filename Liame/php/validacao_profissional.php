<?php
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
  
  }
  else{
     $id_profissional = 0;
  }
  if(isset($_SESSION['id_adm'])){
    $id_adm = $_SESSION['id_adm'];
  
  }else{
    $id_adm=0;
  }

  if(($id_adm != 0)){
    
    $status = 0;
    $documentacao = "";
    $sql_busca = 'SELECT nome_profissional, email_profissional, status_validacao_profissional from profissional 
                  WHERE status_validacao_profissional = "'.$status.'" 
                  AND documentacao_validacao_profissional != "'.$documentacao.'"';
                $consulta = mysqli_query($link, $sql_busca);
						

                if($consulta->num_rows > 0){
                  while ($vetor = mysqli_fetch_array($consulta)){
                    $nome_profissional= $vetor['nome_profissional'];
                    //$especialidade_profissional=$vetor['especialidade'];
                    $email_profissional=$vetor['email_profissional'];
                   // $documentacao_profissional=$vetor['documentacao_validacao_profissional'];
                    $status_profissional=$vetor['status_validacao_profissional'];
?>
                        <div class="col-sm-3">
                          <div class="card">
                            <div class="card-body">
                              <?php
                                echo utf8_encode ('<b>Nome: </b>' .$nome_profissional.'<br>');
                                echo utf8_encode ('<b>Especialidade: </b>' .$especialidade_profissional.'<br>');	
                                echo utf8_encode ('<b>Documentaçao: </b>' .$documentacao_profissional.'<br>');	
                              ?>
                            </div>                    
                          </div>
                        </div>
                      <br>
<?php
                  }
              }else{
                echo "Nenhum profissional para ser avaliado.";
              }
            ?>
            </div>
          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php
<<<<<<< HEAD
  }else if($id_adm == 0){
    header('Location: ../index.php');
      
    }
=======
  }else{
    
    header("Location:../index.php");

  }
>>>>>>> 52cd332ad0787b50a6551a80eb57e5c1de2668c6
  ?>
  
