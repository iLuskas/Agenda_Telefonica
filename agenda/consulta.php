<?php include("php/verifica_sessao.php");?>

<!DOCTYPE html>
<html lang = "pt-br">
<head>
<meta charset = "utf-8"/> 
<title>Consultas</title>
<link rel = "stylesheet" href = "css/agenda.css" />
</head>
<body>
<div id = "div1">
<nav id = "nave">
<ul id = "menu">
<li><a class = "config" href = "index.php">Cadastro</a></li>
<li><a class = "config" href = "consulta.php" >Consultas</a></li> 

</ul>
</nav>
<section id = "conteudo_consulta">
<h1> Consultas</h1>
<hr>
<form method = "get" action = "consulta.php">
Filtrar por Telefone: <input type = "text" id = "aFiltro" name = "bFiltro" class = "campo" autofocus />
<input type = "submit" id = "aBtn" name = "bBtn"  value = "Pesquisar"/>
</form>
<table id = "tabela" border = 1>
<tr>
<td>ID</td><td>Nome</td><td>Endereço</td><td>Telefone</td><td>Sexo</td><td>Data de nacimento</td><td>Excluir</td><td>Alterar</td>
</tr>
<?php
 include("php/busca.php");
 mysqli_close($conexao);
?>
</table>
</section>

</div>

</body>
</html>