<?php

/*
Exercício do livro  PHP_POO. Utilizaçãoo de Instruções SQL.
Aluno: Guglielmo Targino.
<Data:01mar24.
Versão:V0.
PG 173
 */

 //Classe abstrata para gerenciamento de expressões.
 abstract class TExpression{

    //operadosres
    const and_operator='and_-_';
    const or_operator='or_-_';

    //marca metodo dump sendo obrigatório
    abstract public function dump();

 }
 ?>
 