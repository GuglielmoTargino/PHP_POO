<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Modelo inicial para teste em PHP.</title>
</head>


<?php

/*
 * Exercício d livro PHP-POO.
 * Aluno: Guglielmo Targino.
 * Data: 23jul24.
 * Versão:v0
 * pgn 191.
*/

 //carrega função autoload();

 function my_autoloader($TSqlInstruction) {
   include_once 'app.ado/' . $TSqlInstruction . '.class.php';
}

spl_autoload_register('my_autoloader');

 //cria criterio de seleção.
 $criterio=new Tcriteria;
 $criterio->add(new TFilter('id','=','3'));

 //cria instruction de update
 $sql=new TSqlUpdate;
 //define a entrada;
 $sql->setEntity('aluno');
 //atribui o valor de cada coluna;
 $sql->setRowData('nome','dara');
 $sql->setRowData('rua','concordancia');
 $sql->setRowData('fone','11-30-30');
 //define criterio de seleção
 $sql->setCriteria($criterio);

 // exibe comando sql
 echo $sql->getInstruction();
 echo "<br>\n";

?>
</html>
