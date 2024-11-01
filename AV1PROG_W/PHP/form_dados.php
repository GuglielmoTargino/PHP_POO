<!DOCTYPE html>
<!--AV1 da disciplina de programação web
Prof: João Vagner Pereira da Silva.
Aluno: Guglielmo Henriques Targino.
RA:2222104623.
Data: 03out24.
Versão: v1.
Arquivo parte 1/2 (form.php)

-->
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>FORMULÁRIO</h1>
        <h1>PHP-Gravando arquivos no Banco de Dados(CRUD).</h1>
        <h2>| Cadastro de Pets</h2>

  <form name="form1" method="post" action="../AV1PROG_W/dao_mysql2.php"> </br>

      <label>Digite o nome do pet</label>
      <input type="text" name="name_number1" id="id_number1" style="width: 120px; height: 30px; margin:5px;"></br>
      <label>Digite a espécie do pet</label>
      <input type="text" name="name_number2" id="id_number2" style="width: 120px; height: 30px; margin:5px;" ></br>
      <label>Digite o número de ID do pet</label>
      <input type="number" name="name_number3" id="id_number3" style="width: 60px; height: 30px; margin:5px;"></br>
      
     
      
        <button type="submit" name="name_submit" value="Inserir" id="id_inserir">
        <img src="../AV1PROG_W/images/crud1.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Buscar" id="id_buscar" style="border: none; background: none; padding: 0; margin:5px;">
        <img src="../AV1PROG_W/images/crud3.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Alterar" id="id_alterar" style="border: none; background: none; padding: 0; margin:5px;">
        <img src="../AV1PROG_W/images/crud4.png" alt="Enviar" width="60" height="60">
        </button>

        <button type="submit" name="name_submit" value="Excluir" id="id_excluir" style="border: none; background: none; padding: 0; margin:5px;">
        <img src="../AV1PROG_W/images/crud2.png" alt="Enviar" width="60" height="60">
        </button>

  </form>

</div>
</body>

</html>

