<?php
/*
Revisão do exercício do livro PHP-POO
Aluno: Guglielmo Targino
Data: 03jul24
Versão: v2
pgn 90.
*/




//insere a classe produtos.
include_once 'cap2_classes/Produto.class.php';

//cria um objeto da classe produto

$produto=new Produto;
$produto2=new Produto;

//atribui valores aos objetos

$produto->codigo=42;
$produto->descricao='cd toca tudo';

$produto2->codigo=50;
$produto2->descricao='som digital';


$produto->ImprimeEtiqueta();
$produto2->ImprimeEtiqueta();




?>