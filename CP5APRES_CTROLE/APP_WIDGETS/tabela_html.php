<?php

/**
 * Exercício do livro php_poo
 * Aluno: Guglielmo Targino
 * Versão: v1
 * pg 332
 */

 
 $dados1[]=array(1,'Guga1','<a href=""><img id="voltar" src="botao_voltar.png"></a>');
 $dados1[]=array(2,'Guga2','<a href=""><img id="voltar" src=""></a>');
 $dados1[]=array(3,'Guga3','<a href=""><img id="voltar" src=""></a>');
 $dados1[]=array(4,'Guga4','<a href=""><img id="voltar" src=""></a>');


echo '<table>';
echo '<tr>';
echo '<td> ID </td>';
echo '<td> NOME </td>';
echo '<td> OPER</td>';
echo '</tr>';

$i=0;
foreach($dados1 as $x){
    echo "<tr>";
    echo "<td> {$x[0]} </td>";
    echo "<td> {$x[1]} </td>";
    //echo "<td> {$x[2]} </td>";
    echo "</tr>";
}

echo '</table>';
?>