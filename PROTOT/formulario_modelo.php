<!DOCTYPE html>
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
        <h2>| Modelo de formulário</h2>

  <form name="form1" method="post" action="../PROTOT/resposta.php"> </br>

      <label> Nome de usuario</label>
      <input type="text" name="nome" id="id_nome"></br>
      
      <label> Password </label>
      <input type="password" name="name_password" id="id_password"></br>
      
      <label> </label></br>
      <input type="submit" name="name_submit" id="id_button" value="Enviar">
     
  </form> 
<?php

/*Exrcicio modelo de formulario tirado da internet
Aluno: Guglielmo Targino
Data:20jul24
Versão: v2

$raio = $_GET[&#39;num&#39;];

// Imprime o raio
echo &quot;Raio: $raio&lt;br /&gt;&quot;;

 */
  //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.
    function my_autoloader($cla) {
        include_once 'app.ado/' . $cla . '.class.php';
     }     
     spl_autoload_register('my_autoloader');

?>

</div>
</body>

</html>


