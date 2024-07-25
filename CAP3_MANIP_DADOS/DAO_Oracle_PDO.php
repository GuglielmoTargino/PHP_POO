

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
define('PORT',1521);
define('NAME','XE');
define('USER','ght');
define('SENHA',4004);

/*
 
 $conn = 'meuBancoDeDados';
define('USER', 'meuUsuario');
define('SENHA', 'minhaSenha');

try {
    // Criação da instância PDO
    $bdconn = new PDO('oci:dbname='.$conn, USER, SENHA);
    // Definir o modo de erro do PDO para exceção
    $bdconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
 

$conn="
        (DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST =" .HOST.")(PORT =" .PORT. ")
        (CONNECT_DATA =(SERVER = DEDICATED)(SERVICE_NAME =" .NAME.")
        )
      )";      
try {
    //code...
    $bdconn= new PDO('oci:dbname='.$conn,USER, SENHA);

    //$bdconn->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    //$bdconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexão BD OK";

} catch (Exception $th) {
    //throw $th;
    echo "erro de conexão".$th->getMessage();
}

*/
$conn = 'ght';
define('USE2', 'ght');
define('SENH2', '4004');

try {
    // Criação da instância PDO
    $bdconn = new PDO('oci:dbname='.$conn, USE2, SENH2);
    // Definir o modo de erro do PDO para exceção
    $bdconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}


?>

</div>
</body>

</html>
