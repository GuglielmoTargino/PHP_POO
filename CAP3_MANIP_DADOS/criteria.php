

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>

<?php
/*
Revisão do exercício do livro PHP-POO
Aluno: Guglielmo Targino
Data: 22jul24
Versão: v2
pgn 182.
*/

include_once 'app.ado/php_poo-TExpression.class.php';
include_once 'app.ado/php_poo-Tcriteria.class.php';
include_once 'app.ado/php_poo-TFilter.class.php';

// aqui vamos utilizar um operador OR



/*
$criteria= new Tcriteria;
$criteria->add(new TFilter('idade','<',16),'');
echo "<br>\n";
echo $criteria->dump();
echo "<br>\n";
$criteria->add(new TFilter('idade','>',60), TExpression::or_operator);
echo $criteria->dump();
echo "<br>\n";
$arr->add(new TFilter('idade','in',array(24,25,26)));
 */
$arr=new Tcriteria;
$arr->add(new TFilter('idade','in',array(24,25,26)));


echo $arr->dump();
 

?>
</html>
