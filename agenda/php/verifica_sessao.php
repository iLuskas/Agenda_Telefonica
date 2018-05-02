<p align = "right">
<?php 
  session_start();
  if(!isset($_SESSION['nome']))
  {
		header('location: php/login.php');
		die;
  }else{
	  echo  'Olá <strong>'.$_SESSION['nome'].'</strong>,';  
	  ?>
	  <a href = "php/login.php?acao=logout">Sair(X)</a>
	  <?php
  }
?>
 
</p>