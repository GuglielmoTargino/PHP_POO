<?php
/*
carrega as classes
PG 182
*/

include_once 'app.ado/php_poo-TExpression.php';
include_once 'app.ado/php_poo-Tcriteria.php';
include_once 'app.ado/php_poo-TFilter.php';

// aqui vamos utilizar um operador OR

$criteria=new Tcriteria();

$criteria->add(new TFilter('idade','<',16),TExpression::or_operator);
$criteria->add(new TFilter('idade','>',60), TExpression::or_operator);
echo $criteria->dump();
echo "<br>\n";



//aqui vemos um exemplo de criterio utilizando um operador lógico AND.
// junto com operadores in e not in .
$criteria=new Tcriteria();
$criteria->add( new TFilter('idade','in', array(24,25,26)));
$criteria->add(new TFilter('idade','not in',array(10)));
echo $criteria->dump();
echo"<br>\n";

//aqui venos outro exemplo de criteria utilizando o operador LIKE.
$criteria=new Tcriteria();
$criteria->add(new TFilter('nome','like','ped%'),TExpression::or_operator);
$criteria->add(new TFilter('nome','like','mar%'),TExpression::or_operator);
echo $criteria->dump();
echo "<br>\n";

//aqui vemos o uso do operador utilizando "=" e IS NOT

$criteria= new Tcriteria();
$criteria->add(new TFilter('telefone','IS NOT',NULL));
$criteria->add(new TFilter('sexo','+','F'));
echo $criteria->dump();
echo "<BR>\n";

//aqui vemos o uso do operador IN e NOT IN

$criteria=new Tcriteria();
$criteria->add(new TFilter('uf','IN',array('rs','sc','pr')));
$criteria->add(new TFilter('uf','NOT IN',array('ac','pi')));
echo $criteria->dump();
echo "<br>\n";

// neste caso temos o uso composto
// primeiro aponta para F.

$criteria1=new Tcriteria();
$criteria1->add(new TFilter('sexo','=','f'));
$criteria1->add(new TFilter('idade','>','18'));

//Segundo aponrta para M.

$criteria2=new Tcriteria();
$criteria2->add(new TFilter('sexo','=','M'));
$criteria2->add(new TFilter('idade','<','16'));


//agora juntando os dois criterios

$criteria=new Tcriteria();
$criteria->add($criteria1,TExpression::or_operator);
$criteria->add($criteria2,TExpression::or_operator);
echo $criteria->dump();
echo "<br>\n";


?>