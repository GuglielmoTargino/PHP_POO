<!DOCTYPE html>

<?php
/*
Exercício prórpio para conexão BD MYSQL
utilizando o a função PDO.
Aluno: Guglielmo Targino.
Data: 08nov24
Versão: v1.
*/


$dsn = 'mysql:dbname=test;host=localhost';
$user = 'ght';
$password = '4004';

try{ 
    $dbh = new PDO($dsn, $user, $password); //instacia classe para conexao com o BD.
    echo "conexão ok";
                    
      
}catch(PDOException $e){    
    print "Erro de conexao_".$e->getMessage()."\n";
    //encerra a conexão com o BD
    die();
    }       
         
?>

</html>
