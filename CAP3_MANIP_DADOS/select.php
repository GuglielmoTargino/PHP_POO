<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>
<?php
/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 24jul24
 * Versão:v0
 * pgn 197
 */
    //carrega as classes necessárias automaticamente 
    //no momento em que são instaciadas pelos objetos.


 //inicia criterio de seleção
 $criteria=new Tcriteria;
 $criteria->add(new TFilter('nome','like','maria%'));
 $criteria->add(new TFilter('cidade','like','porto%'));

 //define o intervalo da consulta.
 $criteria->setProperty('offset',0);
 $criteria->setProperty('limit',10);
 //ordenação da consulta
 $criteria->setProperty('order','nome');

 //cria seleção
 $sql=new TSqlSelect;
 //define entidade/tabela
 $sql->setEntity('aluno');
 //adiciona coluna
 $sql->_addColumn('nome');
 //define criterio de seleção
 $sql->setCriteria($criteria);
 //processa instrução
 echo $sql->getInstruction();
 echo"<br>\n";





?>
</html>