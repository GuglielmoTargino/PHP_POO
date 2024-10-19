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
 * Data: 23jul24
 * Versão: v0
 * pgn 194
 */

 function my_autoloader($cla) {
    include_once 'app.ado/' . $cla . '.class.php';
 }
 
 spl_autoload_register('my_autoloader');

//instrução delete;
$criteria=new Tcriteria;
$criteria->add(new TFilter('id','=','3'));

$sql= new TSqlDelete;
//define entidade
$sql->setEntity('aluno');
//define o critério de seleção de dados;
$sql->setCriteria($criteria);
//processa a instrução SQL.
echo $sql->getInstruction();
echo "<br>\n";
?>
</html>
