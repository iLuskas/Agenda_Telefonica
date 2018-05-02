<?php
//Validação para filtrar dados do banco de dados e mostrar no formulário

include_once("conexao_sql.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$sql = "SELECT * FROM contatos WHERE idcontatos = '$id'";
$result = mysqli_query($conexao,$sql);
$linha = mysqli_fetch_assoc($result);


//Formulario para edição de contatos
?>
<form id = "contato_informacao" method = "post" action = "php/editacont.php">

  <fieldset id = "painel_cadastro"><legend>Alterar Contato</legend>
   <div><label for = "aNome">Nome:<br><input type = "text" id = "aNome" name = "bNome" size = "50" maxlength = "50" placeholder =  "Seu nome" value = "<?php echo $linha['nome'];?>" required /></label></div>
   <div><label for = "aEmail">Endereço:<br><input type = "text" id = "aEndereco" name = "bEndereco" size = "50" maxlength = "50" placeholder = "Rua,Av..." value = "<?php echo $linha['endereco'];?>" required /></label></div>
   <div><label for = "aTelefone">Telefone:<br><input type = "text" id = "aTelefone" name = "bTelefone" size = "13" maxlength = "13" placeholder = "Seu telefone" value = "<?php echo $linha['telefone'];?>" required /></label></div>
   Sexo:
   <?php
   if($linha['sexo'] == "M"){
	     echo "<label for = 'Masc'><input type = 'radio' id = 'Masc' name = 'sexo' value = 'M' checked = 'true' required /> Masculino</label>";
         echo "<label for = 'Fem'><input type = 'radio' id = 'Fem' name = 'sexo' value = 'F' required /> Feminino</label>";
	   
      }else{
		  echo "<label for = 'Masc'><input type = 'radio' id = 'Masc' name = 'sexo' value = 'M'  required /> Masculino</label>";
          echo "<label for = 'Fem'><input type = 'radio' id = 'Fem' name = 'sexo' value = 'F' checked = 'true' required /> Feminino</label>";
	  }
   ?>
   <div><label for = "aData">Data de nascimento: <input type = "date" id = "aData" name = "bData" value = "<?php echo $linha['data'];?>" required /></label></div>
   <br><input type = "submit" id = "aBtn" name = "bBtn" value = "Salvar"/>
   <input type = "hidden" id = "id" name = "id" value = "<?php echo $linha['idcontatos']?>" >
  </fieldset>

</form>