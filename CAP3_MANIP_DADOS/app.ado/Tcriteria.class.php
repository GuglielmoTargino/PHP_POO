<?php
/**
 * Revisão de exercício do livro PHP-POO
 * Aluno: Guglielmo Targino
 * Data: 22jul24
 * Versão: v2
 * pgn 179.
 */

class Tcriteria extends TExpression{

    private $expressions;//lista de expressões
    private $operators;//lista de operadores
    private $properties;//propriedades de criterios

    public function add(TExpression $expression, $opera=self::and_operator){
        //na primeira vez não precisa de operador lógico.
        //public function add(TExpression $expression, $operator=self::and_operator){
        if(empty($this->expressions)){
            unset($operators);
        }
        //agrega o resultado da expressão na lista
        $this->expressions[]=$expression;
        $this->operators[]=$opera;
    }

    //dumper retorna a expressão.
    public function dump(){

        //concatena lista de expressão

        if(is_array($this->expressions)){

            foreach ($this ->expressions as $i=> $expression) {

                $operador=$this->operators[$i];
                $result=$operador.$expression->dump().' ';

            }
            $result=trim($result);
            return "({$result})";
        }
    }
    // define valor da propriedade
    public function setProperty($property,$value){
        $this->properties[$property]=$value;

    }
    // retorna valor da propriedade
    public function getProperty($property){
        return $this->properties[$property];
    }
}

?>