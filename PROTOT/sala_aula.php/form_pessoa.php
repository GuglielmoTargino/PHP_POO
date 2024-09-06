<!DOCTYPE html>
<!--
Exercício de aula prog_web
Aluno: Guglielmo Targino
Data:29ago24
Versão:v0
-->

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Programação WEB.</title>
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO PARA VALIDAÇÃO DE PESSOAS</h1>

       

  <form name="form1" method="post" action="validacao_pessoa.php"> </br>
      <label>Digite o nome da pessoa</label>
      <input type="text" name="name_nome" id="id_nome"></br>
      <label>Digite a idade da pessoa em anos</label>
      <input type="number" name="name_idade" id="id_idade"></br>

      <fieldset>
        <legend>Selecione o sexo:</legend>
        <input type="radio" name="name_sexo" id="id_masc" value="mas"><label for="id_masc"> Masculino</label>
        <input type="radio" name="name_sexo" id="id_femi" value="fem"><label for="id_femi"> Feminino</label>
      </fieldset>  

      <input type="submit" name="name_verificar" value="value_verificar" id="id_verificar">

  </form> 




</html>