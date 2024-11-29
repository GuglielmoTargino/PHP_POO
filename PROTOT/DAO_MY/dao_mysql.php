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

if($n1 and $n2){

    $dsn = 'mysql:dbname=test;host=localhost';
    $user = 'ght';
    $password = '4004';

    if ($_POST['name_submit'] == 'Enviar') {
        // Código para salvar os dados
        $cmd="INSERT INTO pets (nome,tipo) VALUES ('$n1','$n2')";
    } else if ($_POST['name_submit'] == 'Excluir') {
        // Código para enviar os dados
        $cmd="DELETE FROM pets where nome='$n1'"; 
    } 

    try{
        //instacia classe para conexao com o BD.
        $dbh = new PDO($dsn, $user, $password);    
        //Executa o comando SQL
        $dbh->exec($cmd);
        echo "Sucesso.";
    
    }catch(PDOException $e){
        print "Erro de conexa".$e->getMessage()."\n";
        //encerra a conexão com o BD
        die();
    }   
   
}else{
    echo 'Informe todos os valores por favor';

}

/*
$dsn = 'mysql:dbname=test;host=localhost';
$user = 'ght';
$password = '4004';

try{
    //instacia classe para conexao com o BD.
    $dbh = new PDO($dsn, $user, $password);
    //Executa o comando SQL    
    //$dbh->exec("DELETE FROM pets where nome='joe'");
    $dbh->exec("INSERT INTO pets (nome,tipo) VALUES ('$n1','$n2')");
    //$dbh->exec("UPDATE `pets` SET `nome`='guga' WHERE tipo='gato'");     

    Comandos para exibir resultado na tela
    $sql = 'SELECT * FROM pets';        
   foreach ($dbh->query($sql) as $row) {
        print $row['nome'] . "\n";
        print $row['tipo'] . "\n";       
    }  
}catch(PDOException $e){
    print "Erro de conexa".$e->getMessage()."\n";
    //encerra a conexão com o BD
    die();
}
*/
?>

</br>
<a href="formulario_modelo.php">Voltar</a>
</html>