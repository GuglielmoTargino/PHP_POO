<?php

/**
 * Exercício do livro php_poo
 * Aluno: Guglielmo Targino
 * Versão; v1
 * pg 336
 */

 class TTableCell extends TElement{
    public function __construct($f)
    {
        parent::__construct('td');
        parent::add($value);
    }
 }



?>