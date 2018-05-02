<?php
include_once("conexao_sql.php");

$nome_user = $_POST['bNome'];
$senha_user = md5($_POST['bSenha']);

$sql = mysqli_query($conexao, "SELECT * FROM cadastro WHERE nome_usuario = '$nome_user' AND senha_usuario = '$senha_user'");

$linhas = mysqli_num_rows($sql);

if($linhas == ''){
	
	echo "Usuário não cadastrado.";
	?>
	<a href = "cadastro.php">Cadastrar-se</a>
	<?php
}else{
	while($dados = mysqli_fetch_assoc($sql)){
		session_start();
		$_SESSION['nome_sessao'] = $dados['nome_usuario'];
		$_SESSION['nome'] = $dados['nome'];
		header("location: ../index.php");
		
	}
	
}
?>