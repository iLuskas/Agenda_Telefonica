<?php //Formulário para adicionar um contato?>

<form id = "contato_informacao" method = "post" action = "./ca_contato.php">

  <fieldset id = "painel_cadastro"><legend>Adicionar Contato</legend>
   <div><label for = "aNome">Nome:<br><input type = "text" id = "aNome" name = "bNome" size = "50" maxlength = "50" placeholder =  "Seu nome" required /></label></div>
   <div><label for = "aEmail">Endereço:<br><input type = "text" id = "aEndereco" name = "bEndereco" size = "50" maxlength = "50" placeholder = "Rua,Av..." required /></label></div>
   <div><label for = "aTelefone">Telefone:<br><input type = "text" id = "aTelefone" name = "bTelefone" size = "13" maxlength = "13" placeholder = "Seu telefone"/></label></div>
   <div>Sexo:
   <label for = "Masc"><input type = "radio" id = "Masc" name = "sexo" value = "M" required /> Masculino</label>
   <label for = "Fem"><input type = "radio" id = "Fem" name = "sexo" value = "F" required /> Feminino</label></div>
   <div><label for = "aData">Data de nascimento: <input type = "date" id = "aData" name = "bData" required /></label></div>
   <br><input type = "submit" id = "aBtn" name = "bBtn" value = "Salvar"/>
   <input type = "reset" id = "aBtn" name = "bBtn" value = "Limpar"/>
  </fieldset>

</form>