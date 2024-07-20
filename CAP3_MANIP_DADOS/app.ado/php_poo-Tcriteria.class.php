<?php

//PG 179

class Tcriteria extends TExpression{

    private $expressions;
    private $operators;
    private $properties;

    public function add(TExpression $expression, $operator=self::and_operator){
        //na primeira vez não precisa de operador lógico.
        //public function add(TExpression $expression, $operator=self::and_operator){
        if(empty($this->expressions)){
            unset($operator);
        }
        //agrega o resultado da expressão na lista
        $this->expressions[]=$expression;
        $this->operators[]=$operator;
    }

    //dumper retorna a expressão.
    public function dump(){

        //concatena lista de expressão

        if(is_array($this->expressions)){

            foreach ($this ->expressions as $i=> $expression) {

                $operator=$this->operators[$i];
                $result.=$operator.$expression->dump().'';

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