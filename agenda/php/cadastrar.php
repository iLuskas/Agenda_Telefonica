<?php
include_once("conexao_sql.php");

$nome_user = $_POST['bUser'];
$email_user = $_POST['bEmail'];
$senha_user = md5($_POST['bSenha']);
$nome = $_POST['bNome'];

$sql = "INSERT INTO cadastro (nome_usuario, email_usuario, senha_usuario) VALUES ('$nome_user', '$email_user', '$senha_user', '$nome')";
$salvar_sql = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);
if($linhas == 1){
	echo "Cadastro realizado com sucesso.<a href = '../index.php'>Voltar</a>";
}else{
	echo "Não foi possivel realizar o cadastro. Usuário ou e-mail já cadastrado.";
}

?>