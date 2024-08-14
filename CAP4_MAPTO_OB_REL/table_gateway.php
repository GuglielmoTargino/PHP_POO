<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 4</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Mapeamento Objeto Relacional: 4.4.1 Table Data Gateway</h2>
<?php
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
