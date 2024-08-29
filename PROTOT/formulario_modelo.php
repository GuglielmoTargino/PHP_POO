<!DOCTYPE html>
<!--Exrcicio modelo de formulario
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
        <h2>| Operação com BD</h2>

  <form name="form1" method="post" action="../PROTOT/dao_mysql2.php"> </br>

      <label> Digite o nome do pet</label>
      <input type="text" name="name_number1" id="id_number1"></br>
      <label> Digite a raça do pet</label>
      <input type="text" name="name_number2" id="id_number2"></br>
      
      <input type="submit" name="name_submit" value="alterar" id="id_alterar">
      <input type="submit" name="name_submit" value="buscar" id="id_buscar" >

  </form>

</div>
</body>

</html>

