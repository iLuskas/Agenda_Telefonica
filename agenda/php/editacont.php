<?php
//Busca do formulario dados para fazer a alteração no banco de dados
include_once("conexao_sql.php");

$id = $_POST['id'];
$nome = $_POST['bNome'];  
$endereco = $_POST['bEndereco'];
$telefone = $_POST['bTelefone'];
$sexo = $_POST['sexo'];
$data = $_POST['bData'];


$sql = "UPDATE contatos SET nome = '$nome', endereco = '$endereco', telefone = '$telefone', sexo = '$sexo', data = '$data' WHERE idcontatos = '$id'";
$salvar_sql = mysqli_query($conexao, $sql);

$linhas = mysqli_affected_rows($conexao);

if($linhas == 1){
	echo "Contato foi alterado com sucesso.<a href = '../consulta.php'>Voltar</a>";


}else{
   echo "Ocorreu um erro na alteração.";
  

}
?>