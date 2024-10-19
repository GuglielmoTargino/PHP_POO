<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
<link rel="stylesheet" type="text/css" href="../STYLE/estilo_avulso.css" media="screen" />

</head>

<body>
    <div id="top">
        <h1>CAPÍTULO 3</h1>
        <h1>PHP-Programando com Orientação a Objetos</h1>
        <h2>||Manipulação de dados</h2>
<?php
/**
 * <link rel="stylesheet" type="text/css" href="estilo/estilo_avulso.css" media="screen" />
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 24jul24
 * Versão:v0
 * pgn 198
 */
    //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.
    function my_autoloader($cla) {
        include_once 'app.ado/' . $cla . '.class.php';
     }     
     spl_autoload_register('my_autoloader');

 //inicia criterio de seleção
 $criteria1=new Tcriteria;
 $criteria1->add(new TFilter('sexo','=','F'));
 $criteria1->add(new TFilter('serie','=','3'));

 $criteria2=new Tcriteria;
 $criteria2->add(new TFilter('sexo','=','M'));
 $criteria2->add(new TFilter('serie','=','4'));

 $criteria=new Tcriteria;
 $criteria->add($criteria1,TExpression::or_operator);
 $criteria->add($criteria2,TExpression::or_operator);

 $criteria->setProperty('offset',0);//define o intervalo da consulta.
 $criteria->setProperty('limit',10); 
 $criteria->setProperty('order','nome');//ordenação da consulta

 //cria seleção
 $sql=new TSqlSelect;
 //define entidade/tabela
 $sql->setEntity('aluno');
 //adiciona coluna
 $sql->_addColumn('*');
 //define criterio de seleção
 $sql->setCriteria($criteria);
 //processa instrução
 echo $sql->getInstruction();
 echo"<br>\n";
?>

</div>
</body>

</html>