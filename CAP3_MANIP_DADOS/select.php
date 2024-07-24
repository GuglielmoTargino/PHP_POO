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

 //inicia criterio de seleção
 $criteria=new Tcriteria;
 $criteria->add(new TFilter('nome','like','maria%'));
 $criteria->add(new TFilter('cidade','like','porto%'));
 

?>
</html>