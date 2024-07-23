<?php
/**
 * Exercício do livro <PHP-POO 
 * Aluno: Guglielmo Targino.
 * Data: 23jul24.
 * Versão: v1
 * pgn 189.
 */
final class TSqlUpdate extends TSqlInstruction{

    private $columnvalueS;

    public function setRowData($column, $value){
        //monta array idexada pelo valor da coluna
        if(is_string($value)){
            //aplica aspas
            $value=addslashes($value);
            //se for string
            $this->columnvalueS[$column]="'$value'";
        } else if(is_bool($value)){
            $this->columnvalueS[$column]=$value?'TRUE':'FALSE';
        }else if(isset($value)){
            //se for um dado
            $this->columnvalueS[$value]=$value;            
        } else{
            //se for null
            $this->columnvalueS="NULL";
        }
    }
    public function getInstruction(){
        //mostra a string de update
        $this->sql="UPDATE{$this->entity}";
        
        //monta os pares coluna=valor
        if($this->columnvalueS){
            foreach($this->columnvalueS as $column=>$value){
                $set[]="{$column}={$value}";
            }
        }
        $this->sql.='SET'.implode(',',$set);

        //retorna a clausula where do objeto $this->criteria;

        if($this->criteria){
            $this->sql.='WHERE'.$this->criteria->dump();
        }

        return $this->sql;


    }
    
        
    
}



?>