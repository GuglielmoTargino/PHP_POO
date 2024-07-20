


<!DOCTYPE html>
<?php

/*

Programa do livro php para conexao com banco de dados MYSQL.

Aluno: Guglielmo HENRIQUES Targino.
Data: 19jul24
Versão: v2.
pgn 158

*/



$dsn = 'mysql:dbname=test;host=localhost';
$user = 'pmaght';
$password = '4004';


try{
    //instacia classe para conexao com o BD.
    $dbh = new PDO($dsn, $user, $password);

    //Executa o comando SQL

    $dbh->exec("INSERT INTO produto (id_prod,nome_prod,tipo) VALUES (81,'GUGA','kg')");

    //$sql = 'SELECT * FROM produto ';

   // $sql = 'DELETE FROM login where senha=3440';

    //$sql="UPDATE `login` SET `senha`='3030' WHERE usuario='andrea'";

    //Comandos para exibir resultado na tela
    /*     
   foreach ($dbh->query($sql) as $row) {
        print $row['id_prod'] . "\n";
        print $row['tipo'] . "\n";       
    }
   */

}catch(PDOException $e){

    print "Erro de conexa".$e->getMessage()."\n";

    //encerra a conexão com o BD
    die();

}




?>
</html>