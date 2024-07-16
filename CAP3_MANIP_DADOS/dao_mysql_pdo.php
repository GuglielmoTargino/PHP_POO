
<?php

/*

Programa do livro php para conexao com banco de dados MYSQL.

Aluno: Guglielmo HENRIQUES Targino.
Data: 23Fev24.
Versão: v0.

*/



$dsn = 'mysql:dbname=mysql;host=localhost';
$user = 'root';
$password = '';



$ref_usuario=3440;

try{
    //instacia classe para conexao com o BD.
    $dbh = new PDO($dsn, $user, $password);

    //Executa o comando SQL

    //$dbh->exec("INSERT INTO login (usuario,senha) VALUES ('GUGA',3440)");

    //$sql = 'SELECT * FROM login where senha=3440';

   // $sql = 'DELETE FROM login where senha=3440';

    $sql="UPDATE `login` SET `senha`='3030' WHERE usuario='andrea'";

    //Comandos para exibir resultado na tela
    
    foreach ($dbh->query($sql) as $row) {
        print $row['usuario'] . "\n";
        print $row['senha'] . "\n";
       
    }

}catch(PDOException $e){

    print "Erro de conexa".$e->getMessage()."\n";

    //encerra a conexão com o BD
    die();

}




?>