<?php

/**
 * Exercício do livro PHP-POO
 * Aluno: Guglielmo Targino.
 * Data:23jul24
 * Versão:v0.
 * pgn 193
 */
final class TSqlDelete extends TSqlInstruction{
    public function getInstruction(){
        //monta string de delete
        $this->sql="DELETE FROM {this->entity}";
        //retorna clausula where
        if($this->criteria){
            $expression=$this->criteria->dump();
            if($expression){
                $this->sql.='WHERE'.$expression;
            }

        }
        return $this->sql;
    }
}

?>