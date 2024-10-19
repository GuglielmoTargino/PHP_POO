<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css"/>
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Manipulação de dados</h2>
<?php
/**
 * Exercício do livro PHP-POO.
 * Aluno: Guglielmo Targino.
 * Data: 24jul24
 * Versão:v0.
 * pgn 204 
 */

  //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.
    function my_autoloader($cla) {
        include_once 'app.ado/' . $cla . '.class.php';
     }     
     spl_autoload_register('my_autoloader');

// cria instrução select
$sql=new TSqlSelect;
//define entidade ou tabela.
$sql->setEntity(' produto ');
//insere colunas a ser exibida no select
$sql->_addColumn(' tipo ');
$sql->_addColumn(' nome_prod ');
$sql->_addColumn(' id_prod ');

//define clausula where da condição.
$criteria= new Tcriteria;
$criteria->add(new TFilter(' id_prod ','=',5));


//atribui o critério de seleção.
 $sql->setCriteria($criteria);

try{
    //tenta instrução bd MYSQL
    $conn=TConnection::open('config_conn');
    //executa instrução sql
    $result=$conn->query($sql->getInstruction());
    
    if($result){
        $row=$result->fetch(PDO::FETCH_ASSOC);
        //mostra dados.
        echo "ID do produto é:".$row['id_prod'].". Nome do produto é:".$row['nome_prod']."\n";
        //print_r($row);
    }else{
        //fecha conexão
    $conn=null;
    }
    

}catch(PDOException $e){
    //exibe erro
    print "erro de conexão!:".$e->getMessage()."<br/>";
    die();

}

?>

</div>
</body>

</html>
