 <?php
 if(isset($_GET['acao']) == "logout"){
    echo "Voce deslogou do sistema.";
    session_start();
    session_destroy();		 
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8"/>
<title>Crie sua agenda telefônica</title>

</head>
<body>
<nav>
<ul>
<li><p><a href = "./index.php">Agenda Telefônica</a></p></li>
<li><p><a href = "cadastro.php">Cadastrar-se</a></p></li>
<li><p><a href = "login.php">Login</a></p></li>
<ul/>
</nav>

 <div id = "div_form" align = "center" >
 <form id = "form_cadastrar" method = "post" action = "valida.php">
    <label for = "aNome">Usuário:<br>
	 <input type = "text" id = "aNome" name = "bNome" required /></label>
	<br>
	<label for = "aSenha">Senha:<br>
	 <input type = "password" id = "aSenha" name = "bSenha" required /></label>
	<br>
	 <input type = "submit" id = "aCad" name = "bCad" value = "Login"/> 
	
</form>
</div>
<p align = "center"><a href = "cadastro.php">Cadastrar-se</a></p>

</body>
</html>