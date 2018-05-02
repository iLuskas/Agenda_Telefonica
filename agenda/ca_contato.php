<?php include("php/verifica_sessao.php");?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "utf-8"/> 
<title>Sistema de Cadastro</title>
<link rel = "stylesheet" href = "css/agenda.css" />
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
<h1>Confirmação de cadastro</h1>
<hr><br>
<?php
include("php/cadastrophp.php");
?>



</section>
</div>

</body>
</html>