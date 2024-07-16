<?php
/*
carrega as classes
*/

include_once 'php_poo-TExpression.php';
include_once 'php_poo-Tcriteria.php';
include_once 'php_poo-TFilter.php';

// aqui vamos utilizar um operador OR

$criteria= new Tcriteria;

$criteria->add(new TFilter('idade','<',16),TExpression::or_operator);
echo $criteria->dump();
$criteria->add(new TFilter('idade','>',60), TExpression::or_operator);
echo $criteria->dump();

echo "<br>\n";





?>