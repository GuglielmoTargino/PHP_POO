

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>

<?php
/**
 * Revisão do exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 22jul24
 * Versão:v2
 * pgn 76
 */


//Carrega classes
include_once 'app.ado/TExpression.class.php';
include_once 'app.ado/TFilter.class.php';

// Cria filtros por data (string)
$filter1=new TFilter('data','=','2024-03-01');
echo $filter1->Dump();
echo"<br>\n";



//Cria filtro por salario(integer)
$filter2=new TFilter('salario','>',30000);
echo $filter2->Dump();
echo"<br>\n";

//Cria filtro por sexo (array)
$filter3=new TFilter('sexo','in',array('M ',' F'));
echo $filter3->Dump();
echo"<br>\n";

//Cria filtro por null
$filter4=new TFilter('contato','is not',NULL);
echo $filter4->Dump();
echo"<br>\n";

//Cria filtro por booleano
$filter5=new TFilter('ativo','=',true);
echo $filter5->Dump();
echo"<br>\n";
 
?>
</html>
