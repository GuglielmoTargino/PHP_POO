<?php 

/**
 * Continua exercício do plivro PHP
 * classe para provê os métodos comuns enre as classes 
 * de instruçoes SQL.
 * Aluno: Guglielmo Targino
 * Data: 22jul24
 * Versão: v2.
 * pgn 184. 
 */

    abstract class TSqlInstruction{
    protected $sql; //guarda instrução sql
    protected $criteria;//guarda objeto criteria
    protected $entity;
    protected $columnvalueS;
    

        // método setEntity define o nome da tabela
        final public function setEntity($entity){
        $this->entity=$entity;
        }

        // getEntity retorna o nome da tabela
        final public function getEntity(){
        return $this->entity;
        }

        public function setCriteria(Tcriteria $criteria){
        $this->criteria=$criteria;
        }

        //método getInstruction
        // será declarada apenas nas classes filhas
        abstract function getInstruction();
        }

?>