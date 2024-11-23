<?php
/**
 * Exercício do livro php_poo
 * Aluno: Guglielmo Targino
 * Versão: v1
 * pg 335
 */

 class TTableRow extends TElement{

    public function __construct()
    {
        parent::__construct('tr');
    }

    public function addCell($h)
    {
        $cell=new TTableCell($j);
        parent::add($cell);
        return $cell;
    }

 }


?>