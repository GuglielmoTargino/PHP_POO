<!DOCTYPE html>

<?php
/*
Exercício prórpio para conexão BD MYSQL
utilizando o a função PDO.
Aluno: Guglielmo Targino.
Data: 08nov24
Versão: v1.
*/


function ConexaoBd(){

    try {
        $conn = new PDO('mysql:host=localhost;dbname=test', 'ght', '4004');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexão OK <br>";
        return $conn;
    } catch (PDOException $e) {
        echo "Erro na conexão: " . $e->getMessage();
       unset($conn);
    }

}


/*

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
*/
         
?>

</html>
