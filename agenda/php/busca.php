<?php
//Validação para filtrar telefones  dos contatos no banco de dados

include_once("php/conexao_sql.php");

$filtro = isset($_GET['bFiltro'])?$_GET['bFiltro']:"";

$sql = "select * from contatos where telefone like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

//Exibição de contatos com o banco de dados.
 echo "Contatos Encontrados: $registros";

while($exibircont = mysqli_fetch_array($consulta)){
	
	$codigo = $exibircont[0];
	$nome = $exibircont[1];
	$email = $exibircont[2]; 
	$telefone = $exibircont[3];
	$sexo = $exibircont[4];
	$data = $exibircont[5];
   
  echo "<tr>";
  echo  "<td> $codigo </td>";
  echo  "<td> $nome </td>";
  echo  "<td> $email </td>";
  echo  "<td> $telefone </td>";
  echo  "<td> $sexo </td>";
  echo  "<td> $data </td>";
  echo "<td><a href = 'removecont.php?id=$codigo'>Excluir</a></td>";
  echo "<td><a href = 'edita.php?id=$codigo'>Alterar</a></td>";
  echo "</tr>";
 
}
?>