<?php


/**
 * 
 * Exercício do livro PHP_POO
 * Aluno: Guglielmo Targino
 * Versão: v1
 * pg 334
 */

 class TTable extends TElement{
    public function __construct()
    {
        parent::__construct('table');
    }

    public function addRow()
    {
        $row=new TTableRow;
        parent::add($row);
        return $row;
    }
 }



?>