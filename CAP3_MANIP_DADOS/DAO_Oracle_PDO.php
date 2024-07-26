

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>CONECT BD_ORACLE</title>
        <link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css"/>
    </head>

<body>
    <div id="top">
    <h1>CONEXÃO BD ORACLE-XE</h1>
    <h1>PHP-Programando com Orientação a Objetos</h1>
    <h2>| Conexão utilizando a classe PDO</h2>
<?php


define('HOST','127.0.0.1');
define('PORT',8080);
define('NAME','XE');
define('USER','ght');
define('SENHA',4004);




$conn="(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST =" .HOST. ")(PORT =" .PORT. ")
        (CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME =" .NAME. ")
        )
      )"
  
      ;      
try {
    //code...
    $bdconn= new PDO('oci:dbname='.$conn,USER, SENHA);

    $bdconn->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    $bdconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexão BD OK";

} catch (Exception $th) {
    //throw $th;
    echo "erro de conexão".$th->getMessage();
}

?>

</div>
</body>

</html>
