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
        <h2>| Manipulação de dados xx</h2>
<?php

/**
 * Exercício do livro <PHP-POO
 * Aluno: Guglielmo Targino
 * Data:25jul24.
 * Versão: v0.
 * pgn 210
 */

 try{
    // abre a conexão
    TTranssaction::open('pg_livro');
    //cria instrução insert
    $sql=new TSqlInsert;
    // define a o nome da entidade
    $sql->setEntity('famosos');
    //atribui valor da coluna
    $sql->setRowData('codigo',8);
    $sql->setRowData('nome','galileu');

    // obtem conexão
    $conn=TTranssaction::get();
    //executa conexão
    $result=$conn->Query($sql->getInstruction());

    //cria uma instrução UPDATE
    $sql=new TSqlUpdate;
    //define o nome da entidade;
    $sql->setEntity('famosos');
    //atribui valor da coluna;
    $sql->setRowData('nome','galileu');
    //cria criterio de seleção
    $criteria=new Tcriteria;
    //obtem a pessoa de codigo 8;
    $criteria->add(new TFilter('codigo','=','8'));
    //atribui o criterio 
    $sql->setCriteria($criteria);
    //obtem conexão
    $conn=TTranssaction::get();
    //executa a instrução
    $result=$conn->Query($sql->getInstruction());
    //fecha a conexão;
    TTranssaction::close();

 }catch(Exception $e){
    echo $e->getMessage();
    //desfaz as operações realzadas durante a transação.
    TTranssaction::rollback();
 }

 


?>

</div>
</body>

</html>
