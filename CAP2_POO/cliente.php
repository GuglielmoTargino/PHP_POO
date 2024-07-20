<!DOCTYPE html>

<?php
/**Revisão exercício livro php-poo
 * Aluno: Guglielmo Targino
 * Data: 19jul24
 * Versão: v2
 * pgn 
 * 
 */
include_once 'cap2_classes/pessoa.class.php';
include_once 'cap2_classes/conta.class.php';

$lic=new Pessoa(32,'lic',10,8,5623,'novato',200);

/*$lic->id=32;
$lic->nome='lic';
$lic->altura=10;
$lic->idade=8;
$lic->nasc=56238;
$lic->escolaridade='novato';
$lic->salario=200;
*/

echo "o objeto é {$lic->altura}";


 
 $pgto=new Conta(202,8,233409,'lic',1,20,'nao');

 function Transferir($conta,$valor){
    if($this->Retirar($valor)){
        $conta->Depositar($valor);
    }
 }



echo "{$pgto->agencia}";
/*
$pgto->codigo=8;
$pgto->datacriacao=0409;
$pgto->titular='lic';
$pgto->senha=0001;
$pgto->saldo=20;
$pgto->cancelada='nao';
*/

?>
</html>