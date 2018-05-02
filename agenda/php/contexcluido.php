<?php
include_once("php/conexao_sql.php");

$id = $_GET['id'];
$sql = "delete from contatos where idcontatos = $id";
$result = mysqli_query($conexao,$sql);
echo "O Contato foi exluido com sucesso."
?>