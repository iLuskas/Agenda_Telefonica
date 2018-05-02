<?php include("php/verifica_sessao.php");?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "utf-8"/> 
<title>Agenda Telefonica</title>
  <link rel = "stylesheet" type = "text/css" href = "css/agenda.css" />
   <script src = "js/agenda.js"></script>
</head>
<body>
<div id = "div1">
 <nav id = "nave">
   <ul id = "menu">
    <li><a class = "config" href = "index.php">Cadastro</a></li>
    <li><a class = "config" href = "consulta.php" >Consultas</a></li>
	
</ul>
</nav>
<section id = "conteudo">
<?php include("php/formcont.php")?>
</form>
</section>
</div>
</body>
</html>