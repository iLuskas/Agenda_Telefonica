<?php
//Validação para buscar dados do formulário e inserir no banco de dados
include_once("conexao_sql.php");

$nome = $_POST['bNome'];  
$endereco = $_POST['bEndereco'];
$telefone = $_POST['bTelefone'];
$sexo = $_POST['sexo'];
$data = $_POST['bData'];


$sql = "insert into contatos (nome, endereco, telefone, sexo, data) values('$nome', '$endereco', '$telefone', '$sexo', '$data')";
$salvar_sql = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao); 
mysqli_close($conexao);

if($linhas == 1){
	
   echo "Cadastro realizado com sucesso!";
}else{
   echo "Cadatro não pode ser concluído. Telefone já adicionado.";
}
?>