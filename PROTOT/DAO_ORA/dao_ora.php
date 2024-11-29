<!DOCTYPE html>

<?php
/*
Exercício prórpio para conexão BD MYSQL
utilizando o a função PDO.
Aluno: Guglielmo Targino.
Data: 21ago24
Versão: v0.
*/

$n1=isset($_POST['name_number1'])?$_POST['name_number1']:0;
$n2=isset($_POST['name_number2'])?$_POST['name_number2']:0;

define('HOST','127.0.0.1');
define('PORT','1521');
define('NAME','XE');
define('USER','ght');
define('PASS','4004');

$conn ="
  (DESCRIPTION =
    (ADDRESS = (PROTOCOL = TCP)(HOST =".HOST.")(PORT =".PORT."))
    (CONNECT_DATA =
      (SERVER = DEDICATED)
      (SERVICE_NAME =".NAME.")
    )
  )

";
try {
    $bd=new PDO('oci:dbname='.$conn,USER,PASS);
    $bd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao Bem sucedida";
    //code...
} catch (Exception $e) {
    echo "Falha de conexão".$e->getMessage();
    //throw $th;
}

?>

</br>
<a href="formulario_modelo.php">Voltar</a>
</html>