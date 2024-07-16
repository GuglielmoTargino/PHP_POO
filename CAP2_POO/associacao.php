
<DOCTYPE! html>
<meta charset="utf-8">
<meta lang="pt-br">



<?php
/**
 * Revisão de exercícios do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 08jul24
 * Versão: v2.
 * pgn 118
 */


include_once 'cap2_classes/produto.class.php';
include_once 'cap2_classes/fornecedor.class.php';

//instacia Fornecedor
$fornecedor=new Fornecedor;

$fornecedor->codigo=56;
$fornecedor->razaosocial='GHT';
$fornecedor->endereco='rua tal';
$fornecedor->cidade='São Paulo';

//Instancia Produtp
$produto=new Produto;

$produto->codigo=23;
$produto->descricao='cereja';
$produto->preco=233;
$produto->qtdade=$fornecedor;

// Imprime na tela

echo 'Codigo do produto é :'.$produto->codigo."\n";
echo 'Nome social é :'.$produto->qtdade->cidade;

?>
</DOCTYPE>

