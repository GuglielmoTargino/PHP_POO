<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>||Manipulação de dados</h2>
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
//insere colunas
$sql->_addColumn(' nome_prod ');
//$sql->_addColumn('nome');

//define selecão de busca no select
$criteria= new Tcriteria;
$criteria->add(new TFilter(' id_prod ','=',1));
//$criteria->add(new TFilter('id_prod','=','tipo'));

//atribui o critério de seleção.
 $sql->setCriteria($criteria);

 //$criteria->setProperty('offset',0);//define o intervalo da consulta.
 $criteria->setProperty('id_prod',0);
 //$order=$this->criteria->getProperty('id_prod');

 

try{
    //tenta instrução bd MYSQL
    $conn=TConnection::_open('my_livro');
    //executa instrução sql
    $result=$conn->query($sql->getInstruction());
    
    if($result){
        $row=$result->fetch(PDO::FETCH_ASSOC);
        //mostra dados.
        echo $row[' id_prod ']."\n";
        //echo $row[' id_prod '].'_'.$row[' nome_prod ']."\n"
    }
    //fecha conexão
    $conn=null;

}catch(PDOException $e){
    //exibe erro
    print "erro de conexão!:".$e->getMessage()."<br/>";
    die();

}

?>

</div>
</body>

</html>
