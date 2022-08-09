<?php
  if(!function_exists("protect")){

    function protect(){

      if(!isset($session))
          session_start();

      if(!isset($_session['usuario']) || !is_numeric($_sessiom['usuario'])){
        header("Location: login.php");
      }
    }
  }

 ?>
