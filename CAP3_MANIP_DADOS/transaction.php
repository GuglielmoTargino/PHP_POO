<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>TESTES PHP-POO.</title>
<link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css" media="screen" />
</head>

<body>
    <div id="top">
    <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>| Manipulação de dados: 3.3.13-controle de transações.</h2>
<?php

/**
 * Exercício do livro <PHP-POO
 * Aluno: Guglielmo Targino
 * Data:25jul24.
 * Versão: v0.
 * pgn 210
 */
   //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.
    function my_autoloader($cla) {
        include_once 'app.ado/' . $cla . '.class.php';
     }
     
     spl_autoload_register('my_autoloader');

 try{
    // abre a conexão
    TTransaction::open('config_conn');
    //cria instrução insert
    $sql=new TSqlInsert;
    // define a o nome da entidade
    $sql->setEntity('produto');
    //atribui valor da coluna
    $sql->setRowData('id_prod',8);
    //$sql->setRowData('nome','galileu');

    // obtem conexão
    $conn=TTransaction::get();
    //executa conexão
    $result=$conn->Query($sql->getInstruction());

    //cria uma instrução UPDATE
    $sql=new TSqlUpdate;
    //define o nome da entidade;
    $sql->setEntity('produto');
    //atribui valor da coluna;
    $sql->setRowData('id_prod',8);

    //cria criterio de seleção
    $criteria=new Tcriteria;

    //obtem a pessoa de codigo 8;
    $criteria->add(new TFilter('id_prod','=','8'));
    //atribui o criterio 
    $sql->setCriteria($criteria);

    //obtem conexão
    $conn=TTransaction::get();
    //executa a instrução
    $result=$conn->Query($sql->getInstruction());
    //fecha a conexão;
    TTransaction::close();

 }catch(Exception $e){
    echo $e->getMessage();
    //desfaz as operações realzadas durante a transação.
    TTransaction::rollback();
 }

 


?>

</div>
</body>

</html>
