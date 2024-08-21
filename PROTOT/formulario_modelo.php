<!DOCTYPE html>
<!--Exrcicio modelo de formulario tirado da internet
Aluno: Guglielmo Targino
Data:20jul24
Versão: v3
-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso2.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Operação com números</h2>

  <form name="form1" method="post" action="../PROTOT/dao_mysql.php"> </br>

      <label> Digite o pet nome</label>
      <input type="text" name="name_number1" id="id_number1"></br>
      <label> Digite o pet tipo</label>
      <input type="text" name="name_number2" id="id_number2"></br>
      
      <input type="submit" name="name_submit" value="Enviar" id="id_enviar" >
      <input type="submit" name="name_submit" value="Excluir" id="id_subtrair" >
      <!--
      
      <input type="submit" name="name_submit" id="id_multiplicar" value="Multiplicar">
        -->
  </form> 
<?php

?>

</div>
</body>

</html>


