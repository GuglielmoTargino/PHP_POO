<?php


define('HOST','localhost');
define('PORT','1521');
define('NAME','simu_conn_ora');
define('USER','GHT');
define('SENHA','12345');

$conn="

(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = " .HOST. ")(PORT = ".PORT."))
        (CONNECT_DATA =
        (SERVER = DEDICATED)
        (SERVICE_NAME = ".NAME.")
        )
)"
;

try {
    //code...
    $bdconn=new PDO('oci:dbname='.$conn,USER, SENHA);
    $bdconn->setAttribute(PDO::ATTR_CASE,PDO::CASE_LOWER);
    $bdconn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexão BD OK";

} catch (Exception $th) {
    //throw $th;
    echo "erro de conexão".$th->getMessage();
}





?>