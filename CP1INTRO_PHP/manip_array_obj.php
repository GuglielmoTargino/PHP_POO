<?php

/**
 * Revisão de exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 02jul24
 * Versão: v2
 * pgn 79
 */

class funcionario{
    var $codigo;
    var $nome;
    var $salario=5000;
    

function SetSalario(){

}
function GetSlario(){

}

}

$guga=new funcionario;

$guga->codigo=25;
$guga->nome='Guglielmo';
$guga->salario='9000';

print_r (get_object_vars($guga));
?>