<?php
//Fazendo conexão com o banco de dados

$hostname = "localhost";
$usuario = "root";
$senha  = "lucas123";
$database = "bd_contatos";
$conexao = mysqli_connect($hostname,$usuario,$senha,$database);

if(!$conexao){
	echo "Falha na conexão com o banco de dados.";	
}

?>