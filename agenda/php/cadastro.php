 <!DOCTYPE html>
<html>
<head>
 <meta charset = "utf-8"/>
 <title>Cadastro</title>
</head>
<body>
 <h1 align = center>Cadastro</h1>
 <nav>
  <ul>
     <li><p><a href = "index.php">Agenda Telefônica</a></p></li>
     <li><p><a href = "php/cadastro.php">Cadastrar-se</a></p></li>
       <li><p><a href = "php/login.php">Login</a></p></li>
  <ul/>
</nav>
 
 
 <script type = "text/javascript" src = "../js/script.js"></script>
 <div id = "div_form">
 <form id = "form_cadastrar" method = "post" action = "cadastrar.php" align = "center">
    <label for = "aUser">Usuário:<br>
	 <input type = "text" id = "aUser" name = "bUser" placeholder = "EX: Aleatorio2018" required /></label>
	<br>
	<label for = "aNome">Nome:<br>
	 <input type = "text" id = "aNome" name = "bNome" placeholder = "EX: João, Lucas..." required /></label>
	<br>
    <label for = "aEmail" >E-mail:<br>
	 <input type = "email" id = "aEmail" name = "bEmail" placeholder = "EX: Joao@exemplo.com" required /></label>
	<br>
	<label for = "aSenha">Senha:<br>
	 <input type = "password" id = "aSenha" name = "bSenha" placeholder = "Digite uma senha" required /></label>
	<br>
	<label for = "aSenha2">Confirmar senha:<br>
	 <input type = "password" id = "aSenha2" name = "bSenha2" placeholder = "Confirme a senha"  required /></label>
	<br>
	 <input type = "submit" id = "aCad" name = "bCad" value = "Cadastrar" onkeyup = "return valida_campo()"/> 
	 <br>
	Já é cadastrado? <a href = "login.php">logar-se</a>
</form>

</div>
</body>	
</html>