<!DOCTYPE html>
<?php
/*
Exercício do livro PHP-POO para conexao com banco dados MYSQL
utilizando a função PDO.
Aluno: Guglielmo HENRIQUES Targino.
Data: 19jul24
Versão: v2.
pgn 162

*/
$dsn = 'mysql:dbname=test;host=localhost';
$user = 'pmaght';
$password = '4004';

try{
    //instacia classe para conexao com o BD.
    $dbh = new PDO($dsn, $user, $password);

    //Executa o comando SQL

   $resu=$dbh->query('SELECT tipo FROM produto');
    echo "Operação bem sucedida <br>";

      
   foreach ($resu as $row) {
      echo $row['tipo']."<br>";
             
    }
   


}catch(PDOException $e){

    print "Erro de conexa".$e->getMessage()."\n";

    //encerra a conexão com o BD
    die();
}

?>
</html>