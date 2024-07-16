<?php

include_once 'classes/pessoa.class.php';
include_once 'classes/conta.class.php';

$lic=new Pessoa(32,'lic',10,8,5623,'novato',200);

/*$lic->id=32;
$lic->nome='lic';
$lic->altura=10;
$lic->idade=8;
$lic->nasc=56238;
$lic->escolaridade='novato';
$lic->salario=200;*/

echo "o objeto é {$lic->altura}";

$pgto=new Conta(0202,8,0409,'lic',0001,20,'nao');

$pgto->agencia=0202;
$$pgto->codigo=8;
$pgto->datacriacao=0409;
$pgto->titular='lic';
$pgto->senha=0001;
$pgto->saldo=20;
$pgto->cancelada='nao';




?>