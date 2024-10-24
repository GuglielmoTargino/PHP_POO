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
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Operação com BD</h2>

  <form name="form1" method="post" action="../AV1PROG_W/dao_mysql2.php"> </br>

      <label> Digite o nome do pet</label>
      <input type="text" name="name_number1" id="id_number1"></br>
      <label> Digite a raça do pet</label>
      <input type="text" name="name_number2" id="id_number2"></br>
      <label> Digite o numero de identificação do pet</label>
      <input type="number" name="name_number3" id="id_number3"></br>
      
     
      
        <button type="submit" name="name_submit" value="Inserir" id="id_inserir" style="border: none; background: none; padding: 0;">
        <img src="../AV1PROG_W/images/crud1.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Buscar" id="id_buscar" style="border: none; background: none; padding: 0;">
        <img src="../AV1PROG_W/images/crud3.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Alterar" id="id_alterar" style="border: none; background: none; padding: 0;">
        <img src="../AV1PROG_W/images/crud4.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Excluir" id="id_excluir" style="border: none; background: none; padding: 0;">
        <img src="../AV1PROG_W/images/crud2.png" alt="Enviar" width="60" height="60">
        </button>

  </form>

</div>
</body>

</html>

