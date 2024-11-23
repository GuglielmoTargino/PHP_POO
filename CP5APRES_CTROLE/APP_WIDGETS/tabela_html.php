<?php

/**
 * Exercício do livro php_poo
 * Aluno: Guglielmo Targino
 * Versão: v1
 * pg 332
 */

 $dados[]=array(1,'Guga1');
 $dados[]=array(2,'Guga2');
 $dados[]=array(3,'Guga3');
 $dados[]=array(4,'Guga4');


echo '<table>';

echo '<tr>';
echo '<td> ID </td>';
echo '<td> NOME </td>';
echo '</tr>';

$i=0;
foreach($dados as $x){
    echo "<tr>";
    echo "<td> {$x[0]} </td>";
    echo "<td> {$x[1]} </td>";
    echo "</tr>";
}

echo '</table>';
?>