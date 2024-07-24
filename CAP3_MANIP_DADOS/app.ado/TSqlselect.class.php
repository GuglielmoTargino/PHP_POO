<?php

/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data: 24jul24
 * Vesã<o:v0
 * pgn 195
 */

final class TSqlSelect extends TSqlInstruction{
    private $columnS;// array de colunas a retornar

    //adiciona uma coluna para select
    public function _addColumn($column){
        $this->columnS[]=$column;
    }

    //retorna instrução select em forma de string
    public function getInstruction()
    {
        //monta a instrução select
        $this->sql='SELECT';
        //monta string com nomes de colunas
        $this->sql.=implode(',', $this->columnS);
        //adiciona na clausula FROM o nome da tabela
        $this->sql.='FROM'.$this->entity;
        //obtem clausula where do objeto criteria.
        if($this->criteria){
            $expression=$this->criteria->dump();
            if($expression){
                $this->sql.='WHERE'.$expression;
            }
            //obtém ordenação
            $order=$this->criteria->getProperty('order');
            $limit=$this->criteria->getProperty('limit');
            $offset=$this->criteria->getProperty('offset');
            if($order){
                $this->sql.='ORDER BY'.$order;
            }
            if($limit){
                $this->sql.='LIMIT'.$limit;
            }
            if($offset){
                $this->sql.='OFFSET'.$offset;
            }

        }
        return $this->sql;
    } 

}

?>